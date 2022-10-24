export function ksh(value) {
    return `KSh. ${ Number(value).toLocaleString() }`
}

export function formatBytes(bytes = 0) {
    if (bytes <= 0) return  '0B'; // Zero is a valid value
    if (!bytes) return ''; // Handle non-zero falsy  

    const k = 1024;
    const sizes = ['B', 'kB', 'MB', 'GB', 'TB'];
    const size = Math.floor(Math.log(bytes) / Math.log(k));
    const num = parseFloat((bytes / Math.pow(k, size)).toFixed(2))
    return `${num}${sizes[size]}`;
  }