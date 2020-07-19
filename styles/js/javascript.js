function printDiv(report) {
    var printContents = document.getElementById(report).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}


var myApp = new function() {
    this.printTable = function() {
        var tab = document.getElementById('tab');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
    }
}

var security = new function() {
    this.printTable = function() {
        var tab = document.getElementById('securityreport');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
    }
}