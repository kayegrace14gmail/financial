<<<<<<< HEAD
export function _segments(line: any, target: any, property: any): ({
    source: any;
    target: {
        property: any;
        start: any;
        end: any;
    };
    start: any;
    end: any;
} | {
    source: {
        start: number;
        end: number;
        loop: boolean;
        style?: any;
    };
    target: {
        start: number;
        end: number;
        loop: boolean;
        style?: any;
    };
    start: {
        [x: number]: any;
    };
    end: {
        [x: number]: any;
    };
})[];
export function _getBounds(property: any, first: any, last: any, loop: any): {
    property: any;
    start: any;
    end: any;
};
export function _pointsFromSegments(boundary: any, line: any): any[];
export function _findSegmentEnd(start: any, end: any, points: any): any;
=======
export function _segments(line: any, target: any, property: any): ({
    source: any;
    target: {
        property: any;
        start: any;
        end: any;
    };
    start: any;
    end: any;
} | {
    source: {
        start: number;
        end: number;
        loop: boolean;
        style?: any;
    };
    target: {
        start: number;
        end: number;
        loop: boolean;
        style?: any;
    };
    start: {
        [x: number]: any;
    };
    end: {
        [x: number]: any;
    };
})[];
export function _getBounds(property: any, first: any, last: any, loop: any): {
    property: any;
    start: any;
    end: any;
};
export function _pointsFromSegments(boundary: any, line: any): any[];
export function _findSegmentEnd(start: any, end: any, points: any): any;
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
