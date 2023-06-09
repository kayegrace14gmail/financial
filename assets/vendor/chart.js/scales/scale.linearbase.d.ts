<<<<<<< HEAD
export default class LinearScaleBase extends Scale {
    /** @type {number} */
    start: number;
    /** @type {number} */
    end: number;
    /** @type {number} */
    _startValue: number;
    /** @type {number} */
    _endValue: number;
    _valueRange: number;
    parse(raw: any, index: any): number;
    handleTickRangeOptions(): void;
    getTickLimit(): number;
    /**
       * @protected
       */
    protected computeTickLimit(): number;
    getLabelForValue(value: any): string;
}
import Scale from "../core/core.scale.js";
=======
export default class LinearScaleBase extends Scale {
    /** @type {number} */
    start: number;
    /** @type {number} */
    end: number;
    /** @type {number} */
    _startValue: number;
    /** @type {number} */
    _endValue: number;
    _valueRange: number;
    parse(raw: any, index: any): number;
    handleTickRangeOptions(): void;
    getTickLimit(): number;
    /**
       * @protected
       */
    protected computeTickLimit(): number;
    getLabelForValue(value: any): string;
}
import Scale from "../core/core.scale.js";
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
