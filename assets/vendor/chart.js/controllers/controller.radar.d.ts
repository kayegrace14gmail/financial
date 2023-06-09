<<<<<<< HEAD
export default class RadarController extends DatasetController {
    static id: string;
    /**
     * @type {any}
     */
    static overrides: any;
    /**
       * @protected
       */
    protected getLabelAndValue(index: any): {
        label: any;
        value: string;
    };
    parseObjectData(meta: any, data: any, start: any, count: any): any[];
    update(mode: any): void;
}
import DatasetController from "../core/core.datasetController.js";
=======
export default class RadarController extends DatasetController {
    static id: string;
    /**
     * @type {any}
     */
    static overrides: any;
    /**
       * @protected
       */
    protected getLabelAndValue(index: any): {
        label: any;
        value: string;
    };
    parseObjectData(meta: any, data: any, start: any, count: any): any[];
    update(mode: any): void;
}
import DatasetController from "../core/core.datasetController.js";
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
