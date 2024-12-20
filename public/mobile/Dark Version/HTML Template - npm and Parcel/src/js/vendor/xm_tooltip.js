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
function XM_Tooltip(t) {
    var W = {
            type: "title",
            direction: "top",
            align: "center",
            offset: 20,
            tooltipSelector: ["xm-tooltip"],
            textSelector: "xm-tooltip-text",
            eventHandler: "hover",
            animation: { type: "static", ease: "ease-in-out", speed: 0.3, translateOffset: 10 },
        },
        h = {},
        i = function () {
            var t = document.querySelectorAll(W.container);
            o(t[0], W.container),
                (h.tooltips = []),
                t.forEach(function (t) {
                    var i = {},
                        e = document.createElement("div"),
                        a = !0,
                        n = !1,
                        o = void 0;
                    try {
                        for (var r, l = W.tooltipSelector[Symbol.iterator](); !(a = (r = l.next()).done); a = !0) {
                            var s = r.value;
                            e.classList.add(s);
                        }
                    } catch (t) {
                        (n = !0), (o = t);
                    } finally {
                        try {
                            a || null == l.return || l.return();
                        } finally {
                            if (n) throw o;
                        }
                    }
                    if ("title" === W.type) {
                        var m = document.createElement("p");
                        m.classList.add(W.textSelector), (m.innerHTML = t.getAttribute("data-title")), e.append(m);
                    } else (W.type = "html") && (e.innerHTML = W.htmlContent);
                    void 0 !== W.parent ? t.parentElement.append(e) : t.append(e), (i.containerElement = t), (i.tooltipWrap = { item: e, visible: !1 }), h.tooltips.push(i);
                });
        },
        e = function () {
            var t = !0,
                i = !1,
                e = void 0;
            try {
                for (var a, n = h.tooltips[Symbol.iterator](); !(t = (a = n.next()).done); t = !0) {
                    var o = a.value;
                    void 0 !== W.parent ? (o.containerElement.parentElement.style.position = "relative") : (o.containerElement.style.position = "relative"),
                        (o.tooltipWrap.item.style.whiteSpace = "nowrap"),
                        (o.tooltipWrap.item.style.position = "absolute"),
                        (o.tooltipWrap.item.style.zIndex = 99999);
                    var r = 0;
                    "top" === W.direction || "bottom" === W.direction ? (r += o.tooltipWrap.item.offsetHeight) : ("left" !== W.direction && "right" !== W.direction) || (r += o.tooltipWrap.item.offsetWidth);
                    var l = -W.offset - r;
                    (o.tooltipWrap.item.style[W.direction] = "".concat(l, "px")),
                        "center" === W.align
                            ? "top" === W.direction || "bottom" === W.direction
                                ? ((o.tooltipWrap.item.style.left = "50%"), (o.tooltipWrap.item.style.marginLeft = "-".concat(o.tooltipWrap.item.offsetWidth / 2, "px")))
                                : ("left" !== W.direction && "right" !== W.direction) || ((o.tooltipWrap.item.style.top = "50%"), (o.tooltipWrap.item.style.marginTop = "-".concat(o.tooltipWrap.item.offsetHeight / 2, "px")))
                            : (o.tooltipWrap.item.style[W.align] = 0);
                }
            } catch (t) {
                (i = !0), (e = t);
            } finally {
                try {
                    t || null == n.return || n.return();
                } finally {
                    if (i) throw e;
                }
            }
        },
        a = function () {
            var t = !0,
                i = !1,
                e = void 0;
            try {
                for (
                    var a,
                        n = function () {
                            var t = a.value;
                            "static" === W.animation.type
                                ? (t.tooltipWrap.item.style.display = "none")
                                : "fade" === W.animation.type
                                ? ((t.tooltipWrap.item.style.visibility = "hidden"), (t.tooltipWrap.item.style.opacity = 0))
                                : "zoom" === W.animation.type
                                ? ((t.tooltipWrap.item.style.visibility = "hidden"), (t.tooltipWrap.item.style.transform = "scale(0)"))
                                : "zoom-fade" === W.animation.type
                                ? ((t.tooltipWrap.item.style.visibility = "hidden"), (t.tooltipWrap.item.style.opacity = 0), (t.tooltipWrap.item.style.transform = "scale(0)"))
                                : "translate-in" === W.animation.type
                                ? ((t.tooltipWrap.item.style.visibility = "hidden"),
                                  "top" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                                      : "bottom" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                                      : "right" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))
                                      : "left" === W.direction && (t.tooltipWrap.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)")))
                                : "translate-out" === W.animation.type
                                ? ((t.tooltipWrap.item.style.visibility = "hidden"),
                                  "top" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                                      : "bottom" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                                      : "right" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)"))
                                      : "left" === W.direction && (t.tooltipWrap.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)")))
                                : "translate-in-fade" === W.animation.type
                                ? ((t.tooltipWrap.item.style.opacity = 0),
                                  (t.tooltipWrap.item.style.visibility = "hidden"),
                                  "top" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                                      : "bottom" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                                      : "right" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))
                                      : "left" === W.direction && (t.tooltipWrap.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)")))
                                : "translate-out-fade" === W.animation.type &&
                                  ((t.tooltipWrap.item.style.opacity = 0),
                                  (t.tooltipWrap.item.style.visibility = "hidden"),
                                  "top" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                                      : "bottom" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                                      : "right" === W.direction
                                      ? (t.tooltipWrap.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)"))
                                      : "left" === W.direction && (t.tooltipWrap.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))),
                                window.setTimeout(function () {
                                    t.tooltipWrap.item.style.transition = "all ".concat(W.animation.speed, "s ").concat(W.animation.ease);
                                }, 300);
                        },
                        o = h.tooltips[Symbol.iterator]();
                    !(t = (a = o.next()).done);
                    t = !0
                )
                    n();
            } catch (t) {
                (i = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (i) throw e;
                }
            }
        },
        n = function () {
            if ("hover" === W.eventHandler) {
                var t = !0,
                    i = !1,
                    e = void 0;
                try {
                    for (
                        var a,
                            n = function () {
                                var t = a.value;
                                t.containerElement.addEventListener("mouseenter", function () {
                                    O(t.tooltipWrap);
                                }),
                                    t.containerElement.addEventListener("mouseleave", function () {
                                        w(t.tooltipWrap);
                                    });
                            },
                            o = h.tooltips[Symbol.iterator]();
                        !(t = (a = o.next()).done);
                        t = !0
                    )
                        n();
                } catch (t) {
                    (i = !0), (e = t);
                } finally {
                    try {
                        t || null == o.return || o.return();
                    } finally {
                        if (i) throw e;
                    }
                }
            } else if ("click" === W.eventHandler) {
                var r = !0,
                    l = !1,
                    s = void 0;
                try {
                    for (
                        var m,
                            p = function () {
                                var t = m.value;
                                t.containerElement.addEventListener("click", function () {
                                    x(t.tooltipWrap);
                                });
                            },
                            c = h.tooltips[Symbol.iterator]();
                        !(r = (m = c.next()).done);
                        r = !0
                    )
                        p();
                } catch (t) {
                    (l = !0), (s = t);
                } finally {
                    try {
                        r || null == c.return || c.return();
                    } finally {
                        if (l) throw s;
                    }
                }
                window.addEventListener("click", function () {
                    var t = !0,
                        i = !1,
                        e = void 0;
                    try {
                        for (var a, n = h.tooltips[Symbol.iterator](); !(t = (a = n.next()).done); t = !0) {
                            var o = a.value;
                            o.tooltipWrap.visible && w(o.tooltipWrap);
                        }
                    } catch (t) {
                        (i = !0), (e = t);
                    } finally {
                        try {
                            t || null == n.return || n.return();
                        } finally {
                            if (i) throw e;
                        }
                    }
                }),
                    window.addEventListener("keydown", function (t) {
                        if (27 === t.keyCode) {
                            var i = !0,
                                e = !1,
                                a = void 0;
                            try {
                                for (var n, o = h.tooltips[Symbol.iterator](); !(i = (n = o.next()).done); i = !0) {
                                    var r = n.value;
                                    r.tooltipWrap.visible && w(r.tooltipWrap);
                                }
                            } catch (t) {
                                (e = !0), (a = t);
                            } finally {
                                try {
                                    i || null == o.return || o.return();
                                } finally {
                                    if (e) throw a;
                                }
                            }
                        }
                    });
            } else if ("clickTemp" === W.eventHandler) {
                var f = !0,
                    y = !1,
                    d = void 0;
                try {
                    for (
                        var v,
                            u = function () {
                                var i = v.value;
                                i.containerElement.addEventListener("click", function (t) {
                                    O(i.tooltipWrap),
                                        window.setTimeout(function () {
                                            w(i.tooltipWrap);
                                        }, 2e3);
                                });
                            },
                            b = h.tooltips[Symbol.iterator]();
                        !(f = (v = b.next()).done);
                        f = !0
                    )
                        u();
                } catch (t) {
                    (y = !0), (d = t);
                } finally {
                    try {
                        f || null == b.return || b.return();
                    } finally {
                        if (y) throw d;
                    }
                }
            }
        },
        x = function (t) {
            t.visible ? w(t) : O(t);
        },
        O = function (t) {
            "static" === W.animation.type
                ? (t.item.style.display = "block")
                : "fade" === W.animation.type
                ? ((t.item.style.visibility = "visible"), (t.item.style.opacity = 1))
                : "zoom" === W.animation.type
                ? ((t.item.style.visibility = "visible"), (t.item.style.transform = "scale(1)"))
                : "zoom-fade" === W.animation.type
                ? ((t.item.style.visibility = "visible"), (t.item.style.opacity = 1), (t.item.style.transform = "scale(1)"))
                : "translate-in" === W.animation.type || "translate-out" === W.animation.type
                ? ((t.item.style.visibility = "visible"), (t.item.style.transform = "translate(0, 0)"))
                : ("translate-in-fade" !== W.animation.type && "translate-out-fade" !== W.animation.type) || ((t.item.style.visibility = "visible"), (t.item.style.opacity = 1), (t.item.style.transform = "translate(0, 0)")),
                window.setTimeout(function () {
                    t.visible = !0;
                }, W.animation.speed);
        },
        w = function (t) {
            "static" === W.animation.type
                ? (t.item.style.display = "none")
                : "fade" === W.animation.type
                ? ((t.item.style.visibility = "hidden"), (t.item.style.opacity = 0))
                : "zoom" === W.animation.type
                ? ((t.item.style.visibility = "hidden"), (t.item.style.transform = "scale(0)"))
                : "zoom-fade" === W.animation.type
                ? ((t.item.style.visibility = "hidden"), (t.item.style.opacity = 0), (t.item.style.transform = "scale(0)"))
                : "translate-in" === W.animation.type
                ? ((t.item.style.visibility = "hidden"),
                  "top" === W.direction
                      ? (t.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                      : "bottom" === W.direction
                      ? (t.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                      : "right" === W.direction
                      ? (t.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))
                      : "left" === W.direction && (t.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)")))
                : "translate-out" === W.animation.type
                ? ((t.item.style.visibility = "hidden"),
                  "top" === W.direction
                      ? (t.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                      : "bottom" === W.direction
                      ? (t.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                      : "right" === W.direction
                      ? (t.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)"))
                      : "left" === W.direction && (t.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)")))
                : "translate-in-fade" === W.animation.type
                ? ((t.item.style.opacity = 0),
                  (t.item.style.visibility = "hidden"),
                  "top" === W.direction
                      ? (t.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                      : "bottom" === W.direction
                      ? (t.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                      : "right" === W.direction
                      ? (t.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))
                      : "left" === W.direction && (t.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)")))
                : "translate-out-fade" === W.animation.type &&
                  ((t.item.style.opacity = 0),
                  (t.item.style.visibility = "hidden"),
                  "top" === W.direction
                      ? (t.item.style.transform = "translate(0, ".concat(W.animation.translateOffset, "px)"))
                      : "bottom" === W.direction
                      ? (t.item.style.transform = "translate(0, -".concat(W.animation.translateOffset, "px)"))
                      : "right" === W.direction
                      ? (t.item.style.transform = "translate(-".concat(W.animation.translateOffset, "px, 0)"))
                      : "left" === W.direction && (t.item.style.transform = "translate(".concat(W.animation.translateOffset, "px, 0)"))),
                window.setTimeout(function () {
                    t.visible = !1;
                }, W.animation.speed);
        },
        o = function (t, i, e) {
            var a = 2 < arguments.length && void 0 !== e && e;
            if (!t) throw a ? new Error("Can't find ".concat(i, " inside ").concat(a)) : new Error("Can't find ".concat(i, " in the DOM"));
        };
    (function t(i, e) {
        var a;
        for (var n in e)
            "object" !== _typeof(e[n]) || e[n] instanceof Date ? (e[n] instanceof Date ? (i[n] = new Date(e[n].getTime())) : (i[n] = e[n])) : ((a = e[n] instanceof Array ? [] : {}), void 0 === i[n] && (i[n] = a), t(i[n], e[n]));
    })(W, t),
        i(),
        e(),
        a(),
        n();
}

export { XM_Tooltip as default };