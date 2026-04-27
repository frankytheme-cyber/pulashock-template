/**
 * Pulashock Theme — Interactive Components
 * Slider hero + Carosello recensioni (vanilla JS, no dependencies)
 */

'use strict';

/* ─── Utility ─────────────────────────────────────────────────────────────── */

const prefersReducedMotion = () =>
	window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* ─── Hero Slider ─────────────────────────────────────────────────────────── */

class PulashockSlider {
	/**
	 * @param {HTMLElement} el — .pulashock-slider wrapper
	 */
	constructor(el) {
		this.root         = el;
		this.track        = el.querySelector('.pulashock-slides-track');
		this.slides       = Array.from(el.querySelectorAll('.pulashock-slide'));
		this.prevBtn      = el.querySelector('.pulashock-slider-prev');
		this.nextBtn      = el.querySelector('.pulashock-slider-next');
		this.dotsContainer = el.querySelector('.pulashock-slider-dots');
		this.progressBar  = el.querySelector('.pulashock-slider-progress-bar');

		if (!this.track || this.slides.length < 2) return;

		this.current     = 0;
		this.total       = this.slides.length;
		this.autoTimer   = null;
		this.progressTimer = null;
		this.INTERVAL    = 5500;
		this.isAnimating = false;

		this._init();
	}

	_init() {
		this._buildDots();
		this._activate(0, false);
		this._bindEvents();
		if (!prefersReducedMotion()) this._startAuto();
	}

	_buildDots() {
		if (!this.dotsContainer) return;
		this.dots = [];
		this.slides.forEach((_, i) => {
			const btn = document.createElement('button');
			btn.className  = 'pulashock-slider-dot';
			btn.type       = 'button';
			btn.setAttribute('aria-label', `Vai alla slide ${i + 1}`);
			btn.setAttribute('role', 'tab');
			btn.addEventListener('click', () => {
				this._stopAuto();
				this._go(i);
				if (!prefersReducedMotion()) this._startAuto();
			});
			this.dotsContainer.appendChild(btn);
			this.dots.push(btn);
		});
	}

	_activate(index, animate = true) {
		const prev = this.current;
		this.current = (index + this.total) % this.total;

		// Move track
		const offset = -(this.current * 100);
		if (!animate || prefersReducedMotion()) {
			this.track.style.transition = 'none';
			this.track.style.transform  = `translateX(${offset}%)`;
			// Force reflow then restore transition
			void this.track.offsetWidth;
			this.track.style.transition = '';
		} else {
			this.track.style.transform = `translateX(${offset}%)`;
		}

		// Update active classes
		this.slides.forEach((slide, i) => {
			slide.classList.toggle('is-active', i === this.current);
			slide.setAttribute('aria-hidden', i !== this.current ? 'true' : 'false');
		});

		// Update dots
		if (this.dots) {
			this.dots.forEach((dot, i) => {
				dot.classList.toggle('is-active', i === this.current);
				dot.setAttribute('aria-selected', i === this.current ? 'true' : 'false');
			});
		}

		// Update button states
		if (this.prevBtn) this.prevBtn.disabled = false;
		if (this.nextBtn) this.nextBtn.disabled = false;
	}

	_go(index) {
		if (this.isAnimating) return;
		this.isAnimating = true;
		this._activate(index);
		const duration = prefersReducedMotion() ? 0 : 700;
		setTimeout(() => { this.isAnimating = false; }, duration);
	}

	_prev() { this._go(this.current - 1); }
	_next() { this._go(this.current + 1); }

	_startAuto() {
		this._stopAuto();
		this._resetProgress();
		this.autoTimer = setInterval(() => this._next(), this.INTERVAL);
	}

	_stopAuto() {
		clearInterval(this.autoTimer);
		clearInterval(this.progressTimer);
		this.autoTimer = null;
		this.progressTimer = null;
		if (this.progressBar) this.progressBar.style.width = '0%';
	}

	_resetProgress() {
		if (!this.progressBar || prefersReducedMotion()) return;
		clearInterval(this.progressTimer);
		this.progressBar.style.transition = 'none';
		this.progressBar.style.width = '0%';
		void this.progressBar.offsetWidth;
		this.progressBar.style.transition = `width ${this.INTERVAL}ms linear`;
		this.progressBar.style.width = '100%';
	}

	_bindEvents() {
		if (this.prevBtn) {
			this.prevBtn.addEventListener('click', () => {
				this._stopAuto();
				this._prev();
				if (!prefersReducedMotion()) this._startAuto();
			});
		}
		if (this.nextBtn) {
			this.nextBtn.addEventListener('click', () => {
				this._stopAuto();
				this._next();
				if (!prefersReducedMotion()) this._startAuto();
			});
		}

		// Pause on hover / focus
		this.root.addEventListener('mouseenter', () => this._stopAuto());
		this.root.addEventListener('focusin', () => this._stopAuto());
		this.root.addEventListener('mouseleave', () => {
			if (!prefersReducedMotion()) this._startAuto();
		});
		this.root.addEventListener('focusout', (e) => {
			if (!this.root.contains(e.relatedTarget)) {
				if (!prefersReducedMotion()) this._startAuto();
			}
		});

		// Keyboard navigation
		this.root.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft')  { this._stopAuto(); this._prev(); }
			if (e.key === 'ArrowRight') { this._stopAuto(); this._next(); }
		});

		// Touch swipe
		let touchStartX = 0;
		let touchEndX   = 0;
		this.root.addEventListener('touchstart', (e) => {
			touchStartX = e.changedTouches[0].screenX;
			this._stopAuto();
		}, { passive: true });
		this.root.addEventListener('touchend', (e) => {
			touchEndX = e.changedTouches[0].screenX;
			const diff = touchStartX - touchEndX;
			if (Math.abs(diff) > 50) {
				diff > 0 ? this._next() : this._prev();
			}
			if (!prefersReducedMotion()) this._startAuto();
		}, { passive: true });

		// Visibility API — pause when tab is hidden
		document.addEventListener('visibilitychange', () => {
			if (document.hidden) {
				this._stopAuto();
			} else if (!prefersReducedMotion()) {
				this._startAuto();
			}
		});

		// Handle track transition end
		this.track.addEventListener('transitionend', () => {
			this.isAnimating = false;
		});

		// Sticky header scroll class
		const header = document.querySelector('.pulashock-header');
		if (header) {
			const onScroll = () => {
				header.classList.toggle('is-scrolled', window.scrollY > 10);
			};
			window.addEventListener('scroll', onScroll, { passive: true });
			onScroll();
		}
	}
}

/* ─── Reviews Carousel ────────────────────────────────────────────────────── */

class PulashockCarousel {
	/**
	 * @param {HTMLElement} el — .pulashock-carousel-wrapper
	 */
	constructor(el) {
		this.root     = el;
		this.track    = el.querySelector('.pulashock-carousel-track');
		this.prevBtn  = el.querySelector('.pulashock-carousel-prev');
		this.nextBtn  = el.querySelector('.pulashock-carousel-next');

		if (!this.track) return;

		this.SCROLL_AMOUNT = 300; // px per click
		this._init();
	}

	_init() {
		this._bindEvents();
		this._updateButtons();
	}

	_scroll(dir) {
		const amount = dir * this.SCROLL_AMOUNT;
		if (prefersReducedMotion()) {
			this.track.scrollLeft += amount;
		} else {
			this.track.scrollBy({ left: amount, behavior: 'smooth' });
		}
	}

	_updateButtons() {
		if (!this.prevBtn || !this.nextBtn) return;
		const { scrollLeft, scrollWidth, clientWidth } = this.track;
		this.prevBtn.disabled = scrollLeft <= 0;
		this.nextBtn.disabled = scrollLeft + clientWidth >= scrollWidth - 2;
	}

	_bindEvents() {
		if (this.prevBtn) {
			this.prevBtn.addEventListener('click', () => this._scroll(-1));
		}
		if (this.nextBtn) {
			this.nextBtn.addEventListener('click', () => this._scroll(1));
		}

		this.track.addEventListener('scroll', () => this._updateButtons(), { passive: true });

		// Touch / mouse drag on desktop
		let isDragging  = false;
		let startX      = 0;
		let scrollStart = 0;

		this.track.addEventListener('mousedown', (e) => {
			isDragging  = true;
			startX      = e.pageX - this.track.offsetLeft;
			scrollStart = this.track.scrollLeft;
			this.track.classList.add('is-dragging');
		});

		document.addEventListener('mousemove', (e) => {
			if (!isDragging) return;
			e.preventDefault();
			const x    = e.pageX - this.track.offsetLeft;
			const walk = (x - startX) * 1.5;
			this.track.scrollLeft = scrollStart - walk;
		});

		document.addEventListener('mouseup', () => {
			if (!isDragging) return;
			isDragging = false;
			this.track.classList.remove('is-dragging');
			this._updateButtons();
		});

		// Keyboard scroll when track is focused
		this.track.setAttribute('tabindex', '0');
		this.track.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft')  this._scroll(-1);
			if (e.key === 'ArrowRight') this._scroll(1);
		});

		// ResizeObserver to update button states
		if ('ResizeObserver' in window) {
			new ResizeObserver(() => this._updateButtons()).observe(this.track);
		}
	}
}

/* ─── Mobile Nav Toggle ───────────────────────────────────────────────────── */

function pulashockInitMobileNav() {
	document.querySelectorAll('.wp-block-navigation').forEach((nav) => {
		const openBtn  = nav.querySelector('.wp-block-navigation__responsive-container-open');
		const closeBtn = nav.querySelector('.wp-block-navigation__responsive-container-close');
		const container = nav.querySelector('.wp-block-navigation__responsive-container');

		if (!openBtn || !container) return;

		// If the core Interactivity API already bound this button, skip.
		if (openBtn.dataset.wpOnClick || openBtn.dataset.wpOn) return;

		const open = () => {
			container.classList.add('is-menu-open');
			container.setAttribute('aria-hidden', 'false');
			openBtn.setAttribute('aria-expanded', 'true');
			document.body.style.overflow = 'hidden';
		};

		const close = () => {
			container.classList.remove('is-menu-open');
			container.setAttribute('aria-hidden', 'true');
			openBtn.setAttribute('aria-expanded', 'false');
			document.body.style.overflow = '';
		};

		openBtn.addEventListener('click', open);
		if (closeBtn) closeBtn.addEventListener('click', close);

		document.addEventListener('keydown', (e) => {
			if (e.key === 'Escape' && container.classList.contains('is-menu-open')) close();
		});
	});
}

/* ─── Init on DOM Ready ───────────────────────────────────────────────────── */

function pulashockInit() {
	// Init sliders
	document.querySelectorAll('.pulashock-slider').forEach((el) => {
		new PulashockSlider(el);
	});

	// Init carousels
	document.querySelectorAll('.pulashock-carousel-wrapper').forEach((el) => {
		new PulashockCarousel(el);
	});

	pulashockInitMobileNav();
}

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', pulashockInit);
} else {
	pulashockInit();
}
