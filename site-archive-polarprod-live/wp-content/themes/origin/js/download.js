// Link direct to store
const linkAppDrummerIOS = "https://apps.apple.com/us/app/id1458518029";
const linkAppBuyerIOS = "https://apps.apple.com/us/app/id1459341623";
const linkAppDrummerAndroid =
  "https://play.google.com/store/apps/details?id=io.drum.drummer";
const linkAppBuyerAndroid =
  "https://play.google.com/store/apps/details?id=io.drum.buyer";

const oneLinkDrummer = "https://drumup.onelink.me/Xw7X/6a9887ef";
const oneLinkBuyer = "https://drumio.onelink.me/f7w6/fe42032";

const headerAndroid = 'Which Android app are you interested in?';
const headerIOS = 'Which iOS app are you interested in?';

// Title and button in Modal
const headerDownloadModal = document.getElementById("headerDownloadModal");
const btnAppBuyer = document.getElementById("btnAppBuyer");
const btnAppDrummer = document.getElementById("btnAppDrummer");

// Icon download in footer
const btnDownloadAndroid = document.getElementById("btnDownloadAndroid");
const btnDownloadIOS = document.getElementById("btnDownloadIOS");

let linkDownloadApp = "";

let linkAppBuyer = "";
let linkAppDrummer = "";
function getOS() {
  let userAgent = window.navigator.userAgent,
    platform = window.navigator.platform,
    macosPlatforms = ["Macintosh", "MacIntel", "MacPPC", "Mac68K"],
    windowsPlatforms = ["Win32", "Win64", "Windows", "WinCE"],
    iosPlatforms = ["iPhone", "iPad", "iPod"],
    os = null;
  if (macosPlatforms.indexOf(platform) !== -1) {
    os = "Mac OS";
  } else if (iosPlatforms.indexOf(platform) !== -1) {
    os = "iOS";
  } else if (windowsPlatforms.indexOf(platform) !== -1) {
    os = "Windows";
  } else if (/Android/.test(userAgent)) {
    os = "Android";
  } else if (!os && /Linux/.test(platform)) {
    os = "Linux";
  }
  return os;
}


function configDownloadPlatform() {
  let os = getOS();
  const siteName = document.title;

  // Display modal download
  // If include drummer, buyer, offer
  // Click icon download app: direct to store, not open modal
  // Set default link for icon download app
  if (siteName.toLowerCase().includes("drummer")) {
    btnDownloadAndroid.removeAttribute('data-toggle');
    btnDownloadAndroid.removeAttribute('data-target');
    btnDownloadIOS.removeAttribute('data-toggle');
    btnDownloadIOS.removeAttribute('data-target');
    // If mobile: use onelink
    if (os === 'iOS' || os === 'Android') {
      btnDownloadAndroid.href = oneLinkDrummer;
      btnDownloadIOS.href = oneLinkDrummer;
    } else {
      btnDownloadAndroid.href = linkAppDrummerAndroid;
      btnDownloadIOS.href = linkAppDrummerIOS;
    }
  } else if (siteName.toLowerCase().includes("buyer") || siteName.toLowerCase().includes("offer")) {
    btnDownloadAndroid.removeAttribute('data-toggle');
    btnDownloadAndroid.removeAttribute('data-target');
    btnDownloadIOS.removeAttribute('data-toggle');
    btnDownloadIOS.removeAttribute('data-target');
    // If mobile: use onelink
    if (os === 'iOS' || os === 'Android') {
      btnDownloadAndroid.href = oneLinkBuyer;
      btnDownloadIOS.href = oneLinkBuyer;
    } else {
      btnDownloadAndroid.href = linkAppBuyerAndroid;
      btnDownloadIOS.href = linkAppBuyerIOS;
    }
  }

  // Display download button 
  // Android or IOS device: just display 1 button download for each flatform
  // Desktop Brower: display both to choice for Buyer or Drummer
  // Display label
  if (os === "iOS") {
    btnDownloadIOS.classList.remove("ml-3");
    btnDownloadIOS.classList.add("btn-download");
    btnDownloadAndroid.classList.add("btn-hidden");
  } else if (os === "Android") {
    btnDownloadIOS.classList.add("btn-hidden");
    btnDownloadAndroid.classList.add("btn-download");
  }
}

configDownloadPlatform();

function getLinkDownload(app, tag) {
  let os = getOS();
  if (app === "IOS") {
    // Link when click download app store play icon
    headerDownloadModal.textContent = headerIOS;
    if (os === 'iOS' || os === 'Android') {
      btnAppBuyer.href = oneLinkBuyer;
      btnAppDrummer.href = oneLinkDrummer;
    } else {
      btnAppBuyer.href = linkAppBuyerIOS;
      btnAppDrummer.href = linkAppDrummerIOS;
    }
  } else if (app === "ANDROID") {
    // Link when click download google play icon
    headerDownloadModal.textContent = headerAndroid;
    if (os === 'iOS' || os === 'Android') {
      btnAppBuyer.href = oneLinkBuyer;
      btnAppDrummer.href = oneLinkDrummer;
    } else {
      btnAppBuyer.href = linkAppBuyerAndroid;
      btnAppDrummer.href = linkAppDrummerAndroid;
    }
  }
}
