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

var _20 = {
    name: 'Scale20',
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
                    width: '20',
                    height: '20',
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
                        d: "M30,6H18.82A3,3,0,0,0,17,4.18V2H15V4.18A3,3,0,0,0,13.18,6H2V8H6.05C4.6,11.12,2,17,2,19a5,5,0,0,0,10,0c0-2-2.6-7.88-4-11h5.23A3,3,0,0,0,15,9.82V28H11v2H21V28H17V9.82A3,3,0,0,0,18.82,8h5.23C22.6,11.12,20,17,20,19a5,5,0,0,0,10,0c0-2-2.6-7.88-4.05-11H30ZM7,22a3,3,0,0,1-2.82-2H9.82A3,3,0,0,1,7,22Zm2.82-4H4.18A58.83,58.83,0,0,1,7,10.73,58.83,58.83,0,0,1,9.82,18ZM16,8a1,1,0,1,1,1-1A1,1,0,0,1,16,8Zm9,14a3,3,0,0,1-2.82-2h5.64A3,3,0,0,1,25,22Zm2.82-4H22.18A58.83,58.83,0,0,1,25,10.73,58.83,58.83,0,0,1,27.82,18Z",
                    },
                }),
            children,
        ]);
    },
};

export default _20;
