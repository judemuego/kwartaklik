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
function XM_Dropdown(t) {
    var c,
        g = {
            container: ".dropdown",
            trigger: ".dropdown-trigger",
            activeClass: "active",
            triggerEvent: "click",
            offset: {},
            animation: { type: "static", speed: 0.4, ease: "ease-in-out", zIndex: 9999, translateOffset: { horizontal: 40, vertical: 40 } },
            absolute: !1,
            closeOnWindowClick: !0,
            closeOnDropdownClick: !1,
            linkDropdowns: !0,
            controlToggle: !1,
        },
        b = [],
        n = {},
        e = function () {
            if (g.controlToggle) {
                var t = [];
                void 0 !== g.containerElement ? t.push(g.containerElement) : (t = document.querySelectorAll(g.container));
                var n = !0,
                    e = !1,
                    r = void 0;
                try {
                    for (var o, i = t[Symbol.iterator](); !(n = (o = i.next()).done); n = !0) {
                        var a = o.value,
                            l = {};
                        (l.parent = a.parentElement), (l.container = a), b.push(l);
                    }
                } catch (t) {
                    (e = !0), (r = t);
                } finally {
                    try {
                        n || null == i.return || i.return();
                    } finally {
                        if (e) throw r;
                    }
                }
            } else {
                var c = [];
                void 0 !== g.triggerElement ? c.push(g.triggerElement) : (c = document.querySelectorAll(g.trigger));
                var f = !0,
                    s = !1,
                    u = void 0;
                try {
                    for (var y, v = c[Symbol.iterator](); !(f = (y = v.next()).done); f = !0) {
                        var d = y.value,
                            m = void 0;
                        m = void 0 !== g.containerElement ? g.containerElement : d.parentElement.querySelector(g.container);
                        var p = {};
                        (p.parent = m.parentElement), (p.trigger = d), (p.container = m), b.push(p);
                    }
                } catch (t) {
                    (s = !0), (u = t);
                } finally {
                    try {
                        f || null == v.return || v.return();
                    } finally {
                        if (s) throw u;
                    }
                }
            }
        },
        r = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    a(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        a = function (t) {
            for (var n in ((t.parent.style.position = g.absolute ? "absolute" : "relative"), E(t.container, { position: "absolute", zIndex: g.animation.zIndex }), g.offset)) t.container.style[n] = "".concat(g.offset[n], "px");
        },
        o = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    l(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        l = function (t) {
            ("translate-top" !== g.animation.type && "translate-bottom" !== g.animation.type) ||
                (t.container.style.transition = "transform "
                    .concat(g.animation.speed, "s ")
                    .concat(g.animation.ease, ",\n                                             opacity ")
                    .concat(g.animation.speed, "s ")
                    .concat(g.animation.ease, ",\n                                             visibility ")
                    .concat(g.animation.speed, "s ")
                    .concat(g.animation.ease));
        },
        i = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    f(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        f = function (t) {
            "click" === g.triggerEvent
                ? t.trigger.addEventListener("click", function () {
                      v(t);
                  })
                : "hover" === g.triggerEvent &&
                  (t.trigger.addEventListener("mouseenter", function () {
                      p(t);
                  }),
                  t.trigger.addEventListener("mouseleave", function () {
                      m(t);
                  }));
        },
        s = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    u(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        u = function (t) {
            t.container.addEventListener("click", function () {
                m(t);
            });
        },
        y = function () {
            window.addEventListener("click", function (t) {
                if (c) {
                    var n = t.target;
                    do {
                        var e = !0,
                            r = !1,
                            o = void 0;
                        try {
                            for (var i, a = b[Symbol.iterator](); !(e = (i = a.next()).done); e = !0) {
                                var l = i.value;
                                if (n === l.trigger || n === l.container) return;
                            }
                        } catch (t) {
                            (r = !0), (o = t);
                        } finally {
                            try {
                                e || null == a.return || a.return();
                            } finally {
                                if (r) throw o;
                            }
                        }
                    } while ((n = n.parentElement));
                    d();
                }
            });
        },
        v = function (t) {
            (t.active ? m : p)(t);
        },
        d = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    m(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        },
        m = function (t) {
            h(t),
                g.controlToggle ||
                    (function (t) {
                        t.trigger.classList.remove(g.activeClass);
                    })(t),
                (t.active = !1),
                (c = !1);
        },
        p = function (t) {
            g.linkDropdowns && d(),
                w(t),
                g.controlToggle ||
                    (function (t) {
                        t.trigger.classList.add(g.activeClass);
                    })(t),
                (t.active = !0),
                (c = !0);
        },
        h = function (t) {
            "static" === g.animation.type
                ? E(t.container, { display: "none" })
                : "translate-top" === g.animation.type
                ? E(t.container, { opacity: 0, visibility: "hidden", transform: "translate(0, -".concat(g.animation.translateOffset.vertical, "px)") })
                : "translate-bottom" === g.animation.type && E(t.container, { opacity: 0, visibility: "hidden", transform: "translate(0, ".concat(g.animation.translateOffset.vertical, "px)") });
        },
        w = function (t) {
            "static" === g.animation.type
                ? E(t.container, { display: "block" })
                : ("translate-top" !== g.animation.type && "translate-bottom" !== g.animation.type) || E(t.container, { opacity: 1, visibility: "visible", transform: "translate(0, 0)" });
        },
        E = function (t, n) {
            for (var e in n) t.style[e] = n[e];
        };
    return (
        (function t(n, e) {
            var r;
            for (var o in e)
                "object" !== _typeof(e[o]) || e[o] instanceof Date || e[o] instanceof HTMLElement
                    ? e[o] instanceof Date
                        ? (n[o] = new Date(e[o].getTime()))
                        : (n[o] = e[o])
                    : ((r = e[o] instanceof Array ? [] : {}), void 0 === n[o] && (n[o] = r), t(n[o], e[o]));
        })(g, t),
        e(),
        r(),
        g.controlToggle || i(),
        g.closeOnDropdownClick && s(),
        g.closeOnWindowClick && y(),
        d(),
        window.setTimeout(o, 300),
        (n.showDropdowns = function () {
            var t = !0,
                n = !1,
                e = void 0;
            try {
                for (var r, o = b[Symbol.iterator](); !(t = (r = o.next()).done); t = !0) {
                    var i = r.value;
                    p(i);
                }
            } catch (t) {
                (n = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (n) throw e;
                }
            }
        }),
        (n.hideDropdowns = d),
        n
    );
}

export { XM_Dropdown as default };