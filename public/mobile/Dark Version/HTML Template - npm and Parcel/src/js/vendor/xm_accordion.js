"use strict";
function _typeof(t) {
    return (_typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (t) {
                  return typeof t;
              }
            : function (t) {
                  return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
              })(t);
}
function XM_Accordion(t) {
    var s = {
            triggerSelector: ".accordion-trigger",
            contentSelector: ".accordion-content",
            animation: { type: "all", speed: 0.3, ease: "ease-in-out" },
            paddingAnimation: !1,
            startOpenClass: "accordion-open",
            selectedClass: "selected",
            linkTriggers: !1,
        },
        d = {},
        n = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var o, r = d.accordions[Symbol.iterator](); !(t = (o = r.next()).done); t = !0) {
                    var i = o.value;
                    i.open && ((i.content.style.height = "auto"), (i.content.style.height = "".concat(i.content.scrollHeight, "px")));
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        e = function () {
            var t = document.querySelectorAll(s.triggerSelector);
            if (!t.length) throw new Error("Couldn't find ".concat(s.triggerSelector, " in the DOM"));
            var n = !0,
                e = !(d.accordions = []),
                o = void 0;
            try {
                for (var r, i = t[Symbol.iterator](); !(n = (r = i.next()).done); n = !0) {
                    var a = r.value,
                        c = a.querySelector(s.contentSelector);
                    if (!c && !(c = a.parentElement.querySelector(s.contentSelector))) throw new Error("Couldn't find ".concat(s.contentSelector, " in ").concat(s.triggerSelector, " nor as it's sibling"));
                    if (s.paddingAnimation) d.accordions.push({ trigger: a, content: c, padding: c.style.padding, open: !0, startOpen: c.classList.contains(s.startOpenClass) });
                    else {
                        var l = document.createElement("div");
                        c.parentElement.appendChild(l), l.appendChild(c), d.accordions.push({ trigger: a, content: l, open: !0, startOpen: c.classList.contains(s.startOpenClass) });
                    }
                }
            } catch (t) {
                (e = !0), (o = t);
            } finally {
                try {
                    n || null == i.return || i.return();
                } finally {
                    if (e) throw o;
                }
            }
        },
        o = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var o, r = d.accordions[Symbol.iterator](); !(t = (o = r.next()).done); t = !0) {
                    var i = o.value;
                    (i.content.style.overflow = "hidden"), i.startOpen ? ((i.content.style.height = "".concat(i.content.scrollHeight, "px")), i.content.parentElement.classList.add(s.selectedClass)) : f(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        r = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var o, r = d.accordions[Symbol.iterator](); !(t = (o = r.next()).done); t = !0) {
                    o.value.content.style.transition = "".concat(s.animation.type, " ").concat(s.animation.speed, "s ").concat(s.animation.ease);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        i = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (
                    var o,
                        r = function () {
                            var c = o.value;
                            c.trigger.addEventListener("click", function () {
                                if (s.linkTriggers) {
                                    var t = c.open ? f : y,
                                        n = !0,
                                        e = !1,
                                        o = void 0;
                                    try {
                                        for (var r, i = d.accordions[Symbol.iterator](); !(n = (r = i.next()).done); n = !0) {
                                            var a = r.value;
                                            f(a);
                                        }
                                    } catch (t) {
                                        (e = !0), (o = t);
                                    } finally {
                                        try {
                                            n || null == i.return || i.return();
                                        } finally {
                                            if (e) throw o;
                                        }
                                    }
                                    s.triggerOpens ? y(c) : t(c);
                                } else l(c);
                            });
                        },
                        i = d.accordions[Symbol.iterator]();
                    !(t = (o = i.next()).done);
                    t = !0
                )
                    r();
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == i.return || i.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        l = function (t) {
            t.open ? f(t) : y(t);
        },
        y = function (t) {
            t.open || ((t.open = !0), (t.content.style.height = "".concat(t.content.scrollHeight, "px")), t.content.parentElement.classList.add(s.selectedClass), s.paddingAnimation && (t.content.style.padding = t.padding));
        },
        f = function (t) {
            t.open && ((t.open = !1), (t.content.style.height = 0), t.content.parentElement.classList.remove(s.selectedClass), s.paddingAnimation && (t.content.style.padding = 0));
        };
    return (
        (function t(n, e) {
            var o;
            for (var r in e)
                "object" !== _typeof(e[r]) || e[r] instanceof Date ? (e[r] instanceof Date ? (n[r] = new Date(e[r].getTime())) : (n[r] = e[r])) : ((o = e[r] instanceof Array ? [] : {}), void 0 === n[r] && (n[r] = o), t(n[r], e[r]));
        })(s, t),
        e(),
        o(),
        r(),
        i(),
        window.addEventListener("resize", n),
        d
    );
}
export { XM_Accordion as default };