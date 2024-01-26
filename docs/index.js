const myURL = new URL(window.location.toLocaleString());
console.log(myURL.searchParams.get('redirectURL'));
if (myURL.searchParams.get('redirectURL') === 'old') {
    console.log('came from old site');
    alert("it looks like you went to our old URL https://radicallettuce.xyz we've moved to https://radicallettuce.com now and the old URL will stop working soon, so please use the new URL!");
    window.location.replace("http://radicallettuce.com");
}

