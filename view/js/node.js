function sbtsent() {
    var name =document.getElementById('name')
    if (name.value==0) {
        alert(" Bạn đang thiếu tên người dùng !")
        return false
    }
    return true
}