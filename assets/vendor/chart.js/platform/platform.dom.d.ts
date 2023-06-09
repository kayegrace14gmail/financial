<<<<<<< HEAD
/**
 * Platform class for charts that can access the DOM and global window/document properties
 * @extends BasePlatform
 */
export default class DomPlatform extends BasePlatform {
    /**
       * @param {HTMLCanvasElement} canvas
       * @param {number} [aspectRatio]
       * @return {CanvasRenderingContext2D|null}
       */
    acquireContext(canvas: HTMLCanvasElement, aspectRatio?: number): CanvasRenderingContext2D | null;
    /**
       * @param {Chart} chart
       * @param {string} type
       */
    removeEventListener(chart: Chart, type: string): void;
}
export type Chart = import('../core/core.controller.js').default;
import BasePlatform from "./platform.base.js";
=======
/**
 * Platform class for charts that can access the DOM and global window/document properties
 * @extends BasePlatform
 */
export default class DomPlatform extends BasePlatform {
    /**
       * @param {HTMLCanvasElement} canvas
       * @param {number} [aspectRatio]
       * @return {CanvasRenderingContext2D|null}
       */
    acquireContext(canvas: HTMLCanvasElement, aspectRatio?: number): CanvasRenderingContext2D | null;
    /**
       * @param {Chart} chart
       * @param {string} type
       */
    removeEventListener(chart: Chart, type: string): void;
}
export type Chart = import('../core/core.controller.js').default;
import BasePlatform from "./platform.base.js";
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
