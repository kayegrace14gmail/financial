<<<<<<< HEAD
export default class Animation {
    constructor(cfg: any, target: any, prop: any, to: any);
    _active: boolean;
    _fn: any;
    _easing: any;
    _start: number;
    _duration: number;
    _total: number;
    _loop: boolean;
    _target: any;
    _prop: any;
    _from: unknown;
    _to: any;
    _promises: any[];
    active(): boolean;
    update(cfg: any, to: any, date: any): void;
    cancel(): void;
    tick(date: any): void;
    wait(): Promise<any>;
    _notify(resolved: any): void;
}
=======
export default class Animation {
    constructor(cfg: any, target: any, prop: any, to: any);
    _active: boolean;
    _fn: any;
    _easing: any;
    _start: number;
    _duration: number;
    _total: number;
    _loop: boolean;
    _target: any;
    _prop: any;
    _from: unknown;
    _to: any;
    _promises: any[];
    active(): boolean;
    update(cfg: any, to: any, date: any): void;
    cancel(): void;
    tick(date: any): void;
    wait(): Promise<any>;
    _notify(resolved: any): void;
}
>>>>>>> ed2c91949ebbdd7155591017734f8ca156d00c61
