<<<<<<< HEAD
export default class CategoryScale extends Scale {
    static id: string;
    /**
     * @type {any}
     */
    static defaults: any;
    /** @type {number} */
    _startValue: number;
    _valueRange: number;
    _addedLabels: any[];
    init(scaleOptions: any): void;
    parse(raw: any, index: any): number;
    buildTicks(): {
        value: any;
    }[];
    getLabelForValue(value: any): any;
    getPixelForValue(value: any): number;
    getPixelForTick(index: any): number;
    getValueForPixel(pixel: any): number;
}
import Scale from "../core/core.scale.js";
=======
export default class CategoryScale extends Scale {
    static id: string;
    /**
     * @type {any}
     */
    static defaults: any;
    /** @type {number} */
    _startValue: number;
    _valueRange: number;
    _addedLabels: any[];
    init(scaleOptions: any): void;
    parse(raw: any, index: any): number;
    buildTicks(): {
        value: any;
    }[];
    getLabelForValue(value: any): any;
    getPixelForValue(value: any): number;
    getPixelForTick(index: any): number;
    getValueForPixel(pixel: any): number;
}
import Scale from "../core/core.scale.js";
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
