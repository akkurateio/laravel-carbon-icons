/**
 * Copyright IBM Corp. 2019, 2020
 * Copyright Subvitamine 2020 for PHP translation
 *
 * This source code is licensed under the Apache-2.0 license found in the
 * LICENSE file in the root directory of this source tree.
 *
 * Code generated like @carbon/icon-build-helpers. DO NOT EDIT.
 */
import {
    _ as _objectSpread2,
    a as _defineProperty,
} from '@carbon/icons-vue/es/_rollupPluginBabelHelpers-d91f8aa7.js';
import { getAttributes } from '@carbon/icon-helpers';

var _16 = {
    name: 'Akkurate16',
    functional: true,
    // We use title as the prop name as it is not a valid attribute for an SVG
    // HTML element
    props: ['title'],
    render: function render(createElement, context) {
        var _objectSpread2$1;

        var children = context.children,
            data = context.data,
            listeners = context.listeners,
            props = context.props;
        var attrs = getAttributes(
            _objectSpread2(
                ((_objectSpread2$1 = {
                    xmlns: 'http://www.w3.org/2000/svg',
                    viewBox: '0 0 32 32',
                    fill: 'currentColor',
                    width: '16',
                    height: '16',
                    preserveAspectRatio: 'xMidYMid meet',
                }),
                _defineProperty(
                    _objectSpread2$1,
                    'xmlns',
                    'http://www.w3.org/2000/svg'
                ),
                _defineProperty(_objectSpread2$1, 'title', props.title),
                _objectSpread2$1),
                data.attrs
            )
        );
        var svgData = {
            attrs: attrs,
            on: listeners,
        };

        if (data.staticClass) {
            svgData.class = _defineProperty({}, data.staticClass, true);
        }

        if (data.class) {
            svgData.class = svgData.class || {}; // may be no static class

            svgData.class[data.class] = true;
        } // remove style set by getAttributes

        delete svgData.attrs.style; // combine incoming staticStyle, style with default willChange

        svgData.style = _objectSpread2(
            _objectSpread2({}, data.staticStyle),
            data.style
        );
        return createElement('svg', svgData, [
            props.title && createElement('title', null, props.title),
            createElement('path', {
                    attrs: {
                        d: "M28,10.18v9.61l-24,2V12.21l24-2M30,8,2,10.37V24l28-2.37V8Z",
                    },
                }),
            children,
        ]);
    },
};

export default _16;
