import axion from axios;

let actions = {
    fetchPosts({commit}) {
        axios.get('/student')
            .then(res => {
                commit('FETCH_POSTS', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
}

export default actions