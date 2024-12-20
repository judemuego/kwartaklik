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
function XM_Hexagon(t) {
    var p = {
            width: 100,
            height: 110,
            lineWidth: 6,
            lineColor: "#fff",
            lineCap: "square",
            buttEnd: !1,
            fill: !1,
            clip: !1,
            roundedCorners: !1,
            roundedCornerRadius: 4,
            animation: { easing: !0 },
            animateOnScroll: !1,
            controlAnimation: !1,
            speed: 50,
            scale: { start: 0, end: 1, stop: 1 },
            invertedProgress: !1,
            reverse: !1,
            linkText: !1,
            innerLink: !0,
            linkToContainer: ".bar-progress-wrap",
            linkTo: ".bar-progress-text",
            extraLinkTo: [],
            linkUnits: "%",
            linkUnitsSelector: ".bar-progress-unit",
            innerTextFollowsProgress: !1,
            decimalPoints: 0,
            barTextStyle: { primaryColor: "#fff", secondaryColor: "#363636", font: "bold 10px Exo, sans-serif" },
        },
        h = [],
        v = {},
        i = function () {
            var t = [];
            if (void 0 !== p.containerElement) t.push(p.containerElement);
            else if (!(t = document.querySelectorAll(p.container)).length) throw Error('Unable to find "'.concat(p.container, '" on the DOM'));
            var i = !0,
                e = !1,
                n = void 0;
            try {
                for (var r, o = t[Symbol.iterator](); !(i = (r = o.next()).done); i = !0) {
                    var a = r.value,
                        d = {};
                    (d.container = a),
                        (d.imageSrc = a.getAttribute("data-src")),
                        (d.canvas = document.createElement("canvas")),
                        (d.ctx = d.canvas.getContext("2d")),
                        (d.finishedDrawing = !1),
                        (d.canvas.width = p.width),
                        (d.canvas.height = p.height),
                        (d.canvas.style.position = "absolute"),
                        (d.canvas.style.top = 0),
                        (d.canvas.style.left = 0),
                        (d.container.style.width = "".concat(p.width, "px")),
                        (d.container.style.height = "".concat(p.height, "px")),
                        (d.container.style.position = "relative"),
                        d.container.append(d.canvas),
                        h.push(d);
                }
            } catch (t) {
                (e = !0), (n = t);
            } finally {
                try {
                    i || null == o.return || o.return();
                } finally {
                    if (e) throw n;
                }
            }
        },
        e = function () {
            t.scale &&
                ((p.scale.stop = p.scale.stop > p.scale.end ? p.scale.end : p.scale.stop), (p.scale.stop = p.scale.stop < p.scale.start ? p.scale.start : p.scale.stop), (p.scale.stop = void 0 !== t.scale.stop ? p.scale.stop : p.scale.end)),
                (v.sideWidth = o(p.width, p.height)),
                (v.perimeter = 6 * v.sideWidth),
                (v.lineLength = (p.scale.stop / p.scale.end) * v.perimeter),
                (v.sideCount = Math.floor(v.lineLength / v.sideWidth)),
                (p.stopPoint = p.scale.stop);
        },
        n = function () {
            var t = !0,
                i = !1,
                e = void 0;
            try {
                for (var n, r = h[Symbol.iterator](); !(t = (n = r.next()).done); t = !0) {
                    var o = n.value;
                    if (p.gradient) {
                        var a = o.ctx.createLinearGradient(0, p.height, p.width, 0);
                        a.addColorStop(0, p.gradient.colors[0]), a.addColorStop(1, p.gradient.colors[1]), (o.ctx.strokeStyle = a), (o.ctx.fillStyle = a);
                    } else (o.ctx.strokeStyle = p.lineColor), (o.ctx.fillStyle = p.lineColor);
                    (o.ctx.lineCap = p.lineCap), (o.ctx.lineWidth = p.lineWidth);
                }
            } catch (t) {
                (i = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (i) throw e;
                }
            }
        },
        r = function () {
            var t = !0,
                i = !1,
                e = void 0;
            try {
                for (var n, r = h[Symbol.iterator](); !(t = (n = r.next()).done); t = !0) {
                    var o = n.value;
                    (p.speed = 100 < p.speed ? 100 : p.speed),
                        (p.speed = p.speed < 1 ? 1 : p.speed),
                        (o.animation = {}),
                        (o.animation.easing = p.animation.easing),
                        (o.animation.speed = p.speed),
                        (o.animation.step = (o.animation.speed * p.width) / 2e3),
                        (o.animation.currentProgress = 0);
                }
            } catch (t) {
                (i = !0), (e = t);
            } finally {
                try {
                    t || null == r.return || r.return();
                } finally {
                    if (i) throw e;
                }
            }
        };
    function a(t) {
        for (var i = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop) + window.innerHeight, e = t.canvas, n = e.offsetTop; (e = e.offsetParent); ) n += e.offsetTop;
        return n <= i;
    }
    function d(t) {
        t.animation.currentProgress < p.stopPoint &&
            (t.animation.easing
                ? ((t.animation.currentProgress += 0.06 * (p.stopPoint - t.animation.currentProgress)), t.animation.currentProgress >= p.stopPoint - 1 && ((t.animation.currentProgress = p.stopPoint), (t.finishedDrawing = !0)))
                : ((t.animation.currentProgress += t.animation.step), t.animation.currentProgress >= p.stopPoint && ((t.animation.currentProgress = p.stopPoint), (t.finishedDrawing = !0)))),
            s(t, t.animation.currentProgress),
            t.finishedDrawing || window.requestAnimationFrame(d);
    }
    function m(t, i) {
        return Math.sqrt(Math.pow(i.x - t.x, 2) + Math.pow(i.y - t.y, 2));
    }
    function T(t, i, e) {
        var n = m(t, i),
            r = Math.min(e, n),
            o = (function (t, i, e) {
                var n = i.x - t.x,
                    r = i.y - t.y,
                    o = m(t, i),
                    a = n / o,
                    d = r / o;
                return { x: t.x + e * a, y: t.y + e * d };
            })(t, i, r);
        return { x: o.x, y: o.y, distance: r };
    }
    var o = function (t, i) {
            return (-i / 2 + Math.sqrt(Math.pow(i, 2) + 0.75 * Math.pow(t, 2))) / 1.5;
        },
        s = function (n, t) {
            var i = 1 < arguments.length && void 0 !== t ? t : p.stopPoint;
            if ((n.ctx.clearRect(0, 0, p.width, p.height), 0 !== i)) {
                if ((n.ctx.beginPath(), p.roundedCorners)) {
                    var e = p.fill || p.clip ? 0 : p.lineWidth / 2,
                        r =
                            (function (t) {
                                var i = (p.height - v.sideWidth) / p.width;
                                return (t - (v.sideWidth - p.height) / 2) / i;
                            })(p.roundedCornerRadius) -
                            p.width / 2,
                        o = (function (t) {
                            return ((p.height - v.sideWidth) / p.width) * t + (v.sideWidth - p.height) / 2;
                        })(p.width - r);
                    if (p.clip || p.fill)
                        n.ctx.moveTo(p.width / 2 - r, p.roundedCornerRadius + e),
                            n.ctx.quadraticCurveTo(p.width / 2, 0 + e, p.width / 2 + r, p.roundedCornerRadius + e),
                            n.ctx.lineTo(p.width - e - r, o),
                            n.ctx.quadraticCurveTo(p.width - e, (p.height - v.sideWidth) / 2, p.width - e, (p.height - v.sideWidth) / 2 + r),
                            n.ctx.lineTo(p.width - e, p.height - (p.height - v.sideWidth) / 2 - r),
                            n.ctx.quadraticCurveTo(p.width - e, p.height - (p.height - v.sideWidth) / 2, p.width - e - r, p.height - o),
                            n.ctx.lineTo(p.width / 2 + r, p.height - e - p.roundedCornerRadius),
                            n.ctx.quadraticCurveTo(p.width / 2, p.height - e, p.width / 2 - r, p.height - e - p.roundedCornerRadius),
                            n.ctx.lineTo(0 + e + r, p.height - o),
                            n.ctx.quadraticCurveTo(0 + e, p.height - (p.height - v.sideWidth) / 2, 0 + e, p.height - (p.height - v.sideWidth) / 2 - r),
                            n.ctx.lineTo(0 + e, (p.height - v.sideWidth) / 2 + r),
                            n.ctx.quadraticCurveTo(0 + e, (p.height - v.sideWidth) / 2, 0 + e + r, o),
                            n.ctx.lineTo(p.width / 2 - r, p.roundedCornerRadius + e);
                    else
                        for (;;) {
                            var a = { x: p.width / 2 - r, y: p.roundedCornerRadius + e },
                                d = { x: p.width / 2, y: 0 + e },
                                h = { x: p.width / 2 + r, y: p.roundedCornerRadius + e },
                                s = m(a, d) + m(d, h),
                                c = { x: p.width / 2, y: 0 + e },
                                l = { x: p.width / 2 + r, y: p.roundedCornerRadius + e },
                                u = m(c, l),
                                f = v.lineLength - u - s,
                                g = void 0,
                                x = void 0,
                                w = void 0;
                            if (
                                ((g = { x: p.width / 2 + r, y: p.roundedCornerRadius + e }),
                                (x = { x: p.width - e - r, y: o }),
                                (w = T(g, x, f)),
                                n.ctx.moveTo(p.width / 2 + r, p.roundedCornerRadius + e),
                                n.ctx.lineTo(w.x, w.y),
                                (f -= w.distance) <= 0)
                            )
                                break;
                            if (i <= 1 / 6) break;
                            if ((n.ctx.quadraticCurveTo(p.width - e, (p.height - v.sideWidth) / 2, p.width - e, (p.height - v.sideWidth) / 2 + r), (f -= s) <= 0)) break;
                            if (((g = { x: p.width - e, y: (p.height - v.sideWidth) / 2 + r }), (x = { x: p.width - e, y: p.height - (p.height - v.sideWidth) / 2 - r }), (w = T(g, x, f)), n.ctx.lineTo(w.x, w.y), (f -= w.distance) <= 0))
                                break;
                            if (i <= 2 / 6) break;
                            if ((n.ctx.quadraticCurveTo(p.width - e, p.height - (p.height - v.sideWidth) / 2, p.width - e - r, p.height - o), (f -= s) <= 0)) break;
                            if (((g = { x: p.width - e - r, y: p.height - o }), (x = { x: p.width / 2 + r, y: p.height - e - p.roundedCornerRadius }), (w = T(g, x, f)), n.ctx.lineTo(w.x, w.y), (f -= w.distance) <= 0)) break;
                            if (i <= 0.5) break;
                            if ((n.ctx.quadraticCurveTo(p.width / 2, p.height - e, p.width / 2 - r, p.height - e - p.roundedCornerRadius), (f -= s) <= 0)) break;
                            if (((g = { x: p.width / 2 - r, y: p.height - e - p.roundedCornerRadius }), (x = { x: 0 + e + r, y: p.height - o }), (w = T(g, x, f)), n.ctx.lineTo(w.x, w.y), (f -= w.distance) <= 0)) break;
                            if (i <= 4 / 6) break;
                            if ((n.ctx.quadraticCurveTo(0 + e, p.height - (p.height - v.sideWidth) / 2, 0 + e, p.height - (p.height - v.sideWidth) / 2 - r), (f -= s) <= 0)) break;
                            if (((g = { x: 0 + e, y: p.height - (p.height - v.sideWidth) / 2 - r }), (x = { x: 0 + e, y: (p.height - v.sideWidth) / 2 + r }), (w = T(g, x, f)), n.ctx.lineTo(w.x, w.y), (f -= w.distance) <= 0)) break;
                            if (i <= 5 / 6) break;
                            if ((n.ctx.quadraticCurveTo(0 + e, (p.height - v.sideWidth) / 2, 0 + e + r, o), (f -= s) <= 0)) break;
                            if (((g = { x: 0 + e + r, y: o }), (x = { x: p.width / 2 - r, y: p.roundedCornerRadius + e }), (w = T(g, x, f)), n.ctx.lineTo(w.x, w.y), (f -= w.distance) <= 0)) break;
                            if (i < 1) break;
                            n.ctx.quadraticCurveTo(p.width / 2, 0 + e, p.width / 2 + r, p.roundedCornerRadius + e);
                            break;
                        }
                } else
                    p.clip || p.fill
                        ? (n.ctx.moveTo(p.width / 2, 0),
                          n.ctx.lineTo(p.width, (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width, p.height - (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width / 2, p.height),
                          n.ctx.lineTo(0, p.height - (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(0, (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width / 2, 0))
                        : (n.ctx.moveTo(p.width / 2, 0 + p.lineWidth / 2),
                          n.ctx.lineTo(p.width - p.lineWidth / 2, (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width - p.lineWidth / 2, p.height - (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width / 2, p.height - p.lineWidth / 2),
                          n.ctx.lineTo(0 + p.lineWidth / 2, p.height - (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(0 + p.lineWidth / 2, (p.height - v.sideWidth) / 2),
                          n.ctx.lineTo(p.width / 2, 0 + p.lineWidth / 2));
                if (p.clip) {
                    if ((n.ctx.clip(), n.imageSrc)) {
                        var y = new Image();
                        (y.src = n.imageSrc),
                            y.addEventListener("load", function () {
                                var t = Math.max(p.width, p.height),
                                    i = (Math.abs(p.width - p.height), p.width < p.height ? (p.width - p.height) / 2 : 0),
                                    e = p.height < p.width ? (p.height - p.width) / 2 : 0;
                                n.ctx.drawImage(y, i, e, t, t);
                            });
                    }
                } else p.fill ? n.ctx.fill() : n.ctx.stroke();
            } else n.finishedDrawing = !0;
        };
    (this.render = function (t) {
        (t = ((t = (t = t > p.scale.end ? p.scale.end : t) < p.scale.start ? p.scale.start : t) / p.scale.end) * p.width), s(t);
    }),
        (function t(i, e) {
            var n;
            for (var r in e)
                "object" !== _typeof(e[r]) || e[r] instanceof Date || e[r] instanceof HTMLElement
                    ? e[r] instanceof Date
                        ? (i[r] = new Date(e[r].getTime()))
                        : (i[r] = e[r])
                    : ((n = e[r] instanceof Array ? [] : {}), void 0 === i[r] && (i[r] = n), t(i[r], e[r]));
        })(p, t),
        i(),
        e(),
        n(),
        r(),
        (function () {
            var t = !0,
                i = !1,
                e = void 0;
            try {
                for (
                    var n,
                        r = function () {
                            var i = n.value;
                            p.animateOnScroll
                                ? a(i)
                                    ? window.requestAnimationFrame(function () {
                                          d(i);
                                      })
                                    : window.addEventListener("scroll", function t() {
                                          a(i) &&
                                              (window.requestAnimationFrame(function () {
                                                  d(i);
                                              }),
                                              window.removeEventListener("scroll", t));
                                      })
                                : p.controlAnimation || s(i);
                        },
                        o = h[Symbol.iterator]();
                    !(t = (n = o.next()).done);
                    t = !0
                )
                    r();
            } catch (t) {
                (i = !0), (e = t);
            } finally {
                try {
                    t || null == o.return || o.return();
                } finally {
                    if (i) throw e;
                }
            }
        })();
}

export { XM_Hexagon as default };