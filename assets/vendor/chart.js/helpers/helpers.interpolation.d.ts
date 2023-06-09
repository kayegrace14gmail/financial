<<<<<<< HEAD
import type { Point } from '../types/geometric.js';
import type { SplinePoint } from './helpers.curve.js';
/**
 * @private
 */
export declare function _pointInLine(p1: Point, p2: Point, t: number, mode?: any): {
    x: number;
    y: number;
};
/**
 * @private
 */
export declare function _steppedInterpolation(p1: Point, p2: Point, t: number, mode: 'middle' | 'after' | unknown): {
    x: number;
    y: number;
};
/**
 * @private
 */
export declare function _bezierInterpolation(p1: SplinePoint, p2: SplinePoint, t: number, mode?: any): {
    x: number;
    y: number;
};
=======
import type { Point } from '../types/geometric.js';
import type { SplinePoint } from './helpers.curve.js';
/**
 * @private
 */
export declare function _pointInLine(p1: Point, p2: Point, t: number, mode?: any): {
    x: number;
    y: number;
};
/**
 * @private
 */
export declare function _steppedInterpolation(p1: Point, p2: Point, t: number, mode: 'middle' | 'after' | unknown): {
    x: number;
    y: number;
};
/**
 * @private
 */
export declare function _bezierInterpolation(p1: SplinePoint, p2: SplinePoint, t: number, mode?: any): {
    x: number;
    y: number;
};
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
