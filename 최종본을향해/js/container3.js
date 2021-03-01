    let a = document.getElementById('front1');
    let b = document.getElementById('back1');

    let c = document.getElementById('front2');
    let d = document.getElementById('back2');

    let e = document.getElementById('front3');
    let f = document.getElementById('back3');

    let g = document.getElementById('front4');
    let h = document.getElementById('back4');

    let i = document.getElementById('front5');
    let j = document.getElementById('back5');

    let k = document.getElementById('front6');
    let l = document.getElementById('back6');

    let m = document.getElementById('front7');
    let n = document.getElementById('back7');

    
    let o = document.getElementById('front8');
    let p = document.getElementById('back8');

    let q = document.getElementById('front9');
    let r = document.getElementById('back9');

    let s = document.getElementById('front10');
    let t = document.getElementById('back10');

    let u = document.getElementById('front11');
    let v = document.getElementById('back11');


    let w = document.getElementById('front12');
    let x = document.getElementById('back12');

    let y = document.getElementById('front13');
    let z = document.getElementById('back13');

    let aa = document.getElementById('front14');
    let bb = document.getElementById('back14');

    let cc = document.getElementById('front15');
    let dd = document.getElementById('back15');

    let ee = document.getElementById('front16');
    let ff = document.getElementById('back16');

    function open(){
        this.classList.add('active');
        this.classList.remove('active2');
        this.nextElementSibling.classList.add('active1');
        this.nextElementSibling.classList.remove('active3');

    };

    function close(){
        this.previousElementSibling.classList.add('active2');
        this.previousElementSibling.classList.remove('active');

        this.classList.add('active3');
        this.classList.remove('active1');
    };


    a.addEventListener('click',open);
    b.addEventListener('click',close);

    c.addEventListener('click',open);
    d.addEventListener('click',close);

    e.addEventListener('click',open);
    f.addEventListener('click',close);

    g.addEventListener('click',open);
    h.addEventListener('click',close);

    i.addEventListener('click',open);
    j.addEventListener('click',close);

    k.addEventListener('click',open);
    l.addEventListener('click',close);

    m.addEventListener('click',open);
    n.addEventListener('click',close);

    o.addEventListener('click',open);
    p.addEventListener('click',close);


    q.addEventListener('click',open);
    r.addEventListener('click',close);

    s.addEventListener('click',open);
    t.addEventListener('click',close);

    u.addEventListener('click',open);
    v.addEventListener('click',close);

    w.addEventListener('click',open);
    x.addEventListener('click',close);

    
    y.addEventListener('click',open);
    z.addEventListener('click',close);

    aa.addEventListener('click',open);
    bb.addEventListener('click',close);

    cc.addEventListener('click',open);
    dd.addEventListener('click',close);

    ee.addEventListener('click',open);
    ff.addEventListener('click',close);