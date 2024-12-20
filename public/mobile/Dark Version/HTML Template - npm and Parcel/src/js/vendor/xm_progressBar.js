"use strict";
function _typeof(e) {
    return (_typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (e) {
                  return typeof e;
              }
            : function (e) {
                  return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
              })(e);
}
function XM_ProgressBar(h) {
    function e(e, t) {
        var n = t[0],
            i = t.substring(1);
        "." === n && e.setAttribute("class", i), "#" === n && e.setAttribute("id", i);
    }
    var p = {
            height: 6,
            lineColor: "#ebebeb",
            lineCap: "round",
            buttEnd: !1,
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
        o = document.createElement("canvas"),
        r = o.getContext("2d"),
        l = this,
        f = function (e) {
            var t = document.createElement("div");
            (t.style.width = "".concat(e.partWidth + 2 * e.width, "px")),
                (t.style.height = "".concat(p.height + 2 * e.width, "px")),
                (t.style.border = "".concat(e.width, "px solid ").concat(e.color)),
                (t.style.borderRadius = "200px"),
                (t.style.position = "absolute"),
                (t.style.top = "-".concat(e.width, "px")),
                (t.style.left = "".concat(e.offset, "px")),
                l.container.append(t);
        },
        u = function () {
            if (((l.container = document.querySelector(p.container)), !l.container)) throw Error('Unable to find "'.concat(p.container, '" on the DOM'));
            (o.width = p.width),
                (o.height = p.height),
                (o.style.position = "absolute"),
                (o.style.top = 0),
                (o.style.left = 0),
                (l.container.style.width = "".concat(p.width, "px")),
                (l.container.style.height = "".concat(p.height, "px")),
                (l.container.style.position = "relative"),
                l.container.append(o);
        },
        m = function () {
            var e = 1 / 0;
            for (var t in p.breakpoints) window.innerWidth <= t && (e = t < e ? t : e);
            e !== 1 / 0 && ((p.width = p.breakpoints[e].width), (p.height = p.breakpoints[e].height));
        },
        g = function () {
            var e = 1 / 0;
            for (var t in p.breakpoints) window.innerWidth <= t && (e = t < e ? t : e);
            w(e === 1 / 0 ? p.originalDimensions : p.breakpoints[e]);
        },
        w = function (e) {
            void 0 === e && (((e = {}).width = p.width), (e.height = p.height)), (o.width = e.width), (o.height = e.height), (l.container.style.width = "".concat(e.width, "px")), (l.container.style.height = "".concat(e.height, "px"));
            var t = (p.scale.stop / p.scale.end) * e.width;
            if ((a(t), p.linkElContainer && p.innerTextFollowsProgress && (p.linkElContainer.style.left = "".concat(t, "px")), k(), 0 != t)) {
                if ((r.beginPath(), "butt" === p.lineCap && (r.moveTo(0, e.height / 2), r.lineTo(t, e.height / 2)), "round" === p.lineCap)) {
                    var n = r.lineWidth / 2,
                        i = t - n;
                    p.reverse
                        ? (r.moveTo(e.width - n, e.height / 2), e.width - t <= n ? r.lineTo(n, e.height / 2) : r.lineTo(e.width - t, e.height / 2))
                        : (r.moveTo(n, e.height / 2), i < n ? r.lineTo(n, e.height / 2) : r.lineTo(i, e.height / 2));
                }
                r.stroke();
            }
        },
        T = function () {
            p.linkText &&
                (p.innerLink &&
                    ((p.linkElContainer = l.container.parentElement.querySelector(p.linkToContainer)),
                    p.linkElContainer || ((p.linkElContainer = document.createElement("div")), e(p.linkElContainer, p.linkToContainer), l.container.append(p.linkElContainer)),
                    (p.linkEl = l.container.parentElement.querySelector(p.linkTo)),
                    p.linkEl || ((p.linkEl = document.createElement("p")), e(p.linkEl, p.linkTo), p.linkElContainer.append(p.linkEl)),
                    p.innerTextFollowsProgress && (p.linkElContainer.style.position = "absolute"),
                    p.linkUnits && ((p.linkUnitsEl = document.createElement("span")), e(p.linkUnitsEl, p.linkUnitsSelector), (p.linkUnitsEl.innerHTML = p.linkUnits))),
                0 < p.extraLinkTo.length &&
                    ((p.extraLinkEl = []),
                    p.extraLinkTo.forEach(function (e) {
                        if (!document.querySelector(e)) throw Error('Unable to find "'.concat(e, '" on the DOM'));
                        p.extraLinkEl.push(document.querySelector(e));
                    })));
        },
        a = function (e) {
            if (p.linkText) {
                var t = ((e / p.width) * p.scale.end).toFixed(p.decimalPoints);
                p.invertedProgress && (t = p.scale.end - t),
                    p.innerLink &&
                        ((p.linkEl.innerHTML = t),
                        p.linkUnits && p.linkEl.append(p.linkUnitsEl),
                        "/" === p.linkUnits && (p.linkEl.innerHTML += p.scale.end),
                        p.innerTextFollowsProgress && (p.linkElContainer.style.left = "".concat(e, "px"))),
                    0 < p.extraLinkTo.length &&
                        p.extraLinkEl.forEach(function (e) {
                            e.innerHTML = t;
                        });
            }
        },
        y = function () {
            (p.speed = 100 < p.speed ? 100 : p.speed), (p.speed = p.speed < 1 ? 1 : p.speed), (p.animation.step = (p.speed * p.width) / 2e3), (p.animation.currentProgress = 0);
        };
    function k() {
        if (p.gradient) {
            var e = r.createLinearGradient(0, p.height, p.width, 0);
            e.addColorStop(0, p.gradient.colors[0]), e.addColorStop(1, p.gradient.colors[1]), (r.strokeStyle = e);
        } else r.strokeStyle = p.lineColor;
        (r.lineCap = p.lineCap), (r.lineWidth = p.height);
    }
    function v() {
        for (var e = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop) + window.innerHeight, t = o, n = t.offsetTop; (t = t.offsetParent); ) n += t.offsetTop;
        return n <= e;
    }
    function x() {
        p.animation.currentProgress < p.stopPoint &&
            (p.animation.easing
                ? ((p.animation.currentProgress += 0.06 * (p.stopPoint - p.animation.currentProgress)), p.animation.currentProgress >= p.stopPoint - 1 && ((p.animation.currentProgress = p.stopPoint), (l.done = !0)))
                : ((p.animation.currentProgress += p.animation.step), p.animation.currentProgress >= p.stopPoint && ((p.animation.currentProgress = p.stopPoint), (l.done = !0)))),
            E(p.animation.currentProgress),
            l.done || window.requestAnimationFrame(x);
    }
    var E = function (e) {
            var t = 0 < arguments.length && void 0 !== e ? e : p.stopPoint;
            if ((a(t), r.clearRect(0, 0, p.width, p.height), 0 === t))
                return p.emptyText && (p.emptyTextContainer ? (p.emptyTextEl = document.querySelector(p.emptyTextContainer)) : (p.emptyTextEl = p.linkEl.parentElement), (p.emptyTextEl.innerHTML = p.emptyText)), void (l.done = !0);
            if ((r.beginPath(), "butt" === p.lineCap && (r.moveTo(0, p.height / 2), r.lineTo(t, p.height / 2), r.stroke()), "round" === p.lineCap)) {
                var n = r.lineWidth / 2,
                    i = t - n;
                p.reverse
                    ? (r.moveTo(p.width - n, p.height / 2), p.width - t <= n ? r.lineTo(n, p.height / 2) : r.lineTo(p.width - t, p.height / 2))
                    : (r.moveTo(n, p.height / 2), i < n ? r.lineTo(n, p.height / 2) : r.lineTo(i, p.height / 2)),
                    r.stroke(),
                    p.buttEnd && ((r.lineCap = "butt"), p.reverse ? (r.moveTo(p.width - t, p.height / 2), r.lineTo(p.width - t - n, p.height / 2)) : (r.moveTo(i, p.height / 2), r.lineTo(t, p.height / 2)), r.stroke(), (r.lineCap = "round"));
            }
            p.barText && s(t),
                p.completeText &&
                    t === p.width &&
                    (p.completeTextContainer ? (p.completeTextEl = document.querySelector(p.completeTextContainer)) : (p.completeTextEl = p.linkEl.parentElement), (p.completeTextEl.innerHTML = p.completeText));
        },
        s = function (e) {
            var t = 0;
            r.font = p.barTextStyle.font;
            for (var n = 0; n < p.barText.length; n++)
                (r.fillStyle = p.barTextStyle.primaryColor), e < t + 12 && (r.fillStyle = p.barTextStyle.secondaryColor), r.fillText(p.barText[n], 12 + t, 4 + p.height / 2), (t += r.measureText(p.barText[n]).width);
        };
    l.render = function (e) {
        (e = ((e = (e = e > p.scale.end ? p.scale.end : e) < p.scale.start ? p.scale.start : e) / p.scale.end) * p.width), E(e);
    };
    var b = function e(t, n) {
        var i;
        for (var o in n)
            "object" !== _typeof(n[o]) || n[o] instanceof Date ? (n[o] instanceof Date ? (t[o] = new Date(n[o].getTime())) : (t[o] = n[o])) : ((i = n[o] instanceof Array ? [] : {}), void 0 === t[o] && (t[o] = i), e(t[o], n[o]));
    };
    !(function () {
        if ((b(p, h), "auto" === p.width || void 0 === p.width)) {
            var e = document.querySelector(p.container).parentElement;
            (p.width = e.offsetWidth),
                window.addEventListener("resize", function () {
                    (p.width = e.offsetWidth), w();
                });
        }
        if (
            ((p.originalDimensions = { width: p.width, height: p.height }),
            m(),
            h.scale &&
                ((p.scale.stop = p.scale.stop > p.scale.end ? p.scale.end : p.scale.stop), (p.scale.stop = p.scale.stop < p.scale.start ? p.scale.start : p.scale.stop), (p.scale.stop = void 0 !== h.scale.stop ? p.scale.stop : p.scale.end)),
            (p.stopPoint = (p.scale.stop / p.scale.end) * p.width),
            u(),
            T(),
            k(),
            y(),
            p.animateOnScroll
                ? v()
                    ? window.requestAnimationFrame(x)
                    : window.addEventListener("scroll", function e() {
                          v() && (window.requestAnimationFrame(x), window.removeEventListener("scroll", e));
                      })
                : p.controlAnimation || E(),
            void 0 !== p.split)
        )
            if (void 0 !== p.split.parts)
                for (var t = (p.width - p.split.gap * (p.split.parts - 1)) / p.split.parts, n = -p.split.gap, i = 0; i < p.split.parts; i++) f({ width: p.split.gap, color: p.split.color, offset: n, partWidth: t }), (n += t + p.split.gap);
            else if (void 0 !== p.split.partItems) {
                var o = 0,
                    r = !0,
                    l = !1,
                    a = void 0;
                try {
                    for (var s, c = p.split.partItems[Symbol.iterator](); !(r = (s = c.next()).done); r = !0) {
                        var d = s.value;
                        (o -= d.gap), f({ width: d.gap, color: p.split.color, offset: o, partWidth: d.width }), (o += d.width + 2 * d.gap);
                    }
                } catch (e) {
                    (l = !0), (a = e);
                } finally {
                    try {
                        r || null == c.return || c.return();
                    } finally {
                        if (l) throw a;
                    }
                }
            }
        p.breakpoints &&
            window.addEventListener("resize", function () {
                g();
            });
    })();
}

export { XM_ProgressBar as default };