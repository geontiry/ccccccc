export function timeago(timestamp) {
    let timestamp = toTimestamp(this.dateTime)
    let nowTime = getNow()
    let timer = (nowTime - timestamp) / 1000 
    let timeago = ''

    if (timer <= 0 || Math.floor(timer / 60) <= 0) {
      timeago = now
    } else if (timer < 3600) {
      timeago = this.getTimeAgoString(Math.round(timer / 60), min)
    } else if (timer >= 3600 && Math.round(timer / 3600) < 24) {
      timeago = this.getTimeAgoString(Math.round(timer / 3600), hour)
    } else if (timer / 86400 <= 31) {
      timeago = this.getTimeAgoString(Math.round(timer / 86400), day)
    } else {
      timeago = getNowString(timestamp)
    }

    return {
      timeago,
      timestamp,
      nowString: getNowMoreString(timestamp),
    }
}