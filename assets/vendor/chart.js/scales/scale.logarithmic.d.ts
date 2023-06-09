<<<<<<< HEAD
export default class LogarithmicScale extends Scale {
    static id: string;
    /**
     * @type {any}
     */
    static defaults: any;
    /** @type {number} */
    start: number;
    /** @type {number} */
    end: number;
    /** @type {number} */
    _startValue: number;
    _valueRange: number;
    parse(raw: any, index: any): number;
    _zero: boolean;
    handleTickRangeOptions(): void;
    /**
       * @param {number} value
       * @return {string}
       */
    getLabelForValue(value: number): string;
    getPixelForValue(value: any): number;
    getValueForPixel(pixel: any): number;
}
import Scale from "../core/core.scale.js";
=======
export default class LogarithmicScale extends Scale {
    static id: string;
    /**
     * @type {any}
     */
    static defaults: any;
    /** @type {number} */
    start: number;
    /** @type {number} */
    end: number;
    /** @type {number} */
    _startValue: number;
    _valueRange: number;
    parse(raw: any, index: any): number;
    _zero: boolean;
    handleTickRangeOptions(): void;
    /**
       * @param {number} value
       * @return {string}
       */
    getLabelForValue(value: number): string;
    getPixelForValue(value: any): number;
    getValueForPixel(pixel: any): number;
}
import Scale from "../core/core.scale.js";
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
