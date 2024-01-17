import {
    mdiAccountCircle,
    mdiMonitor,
    mdiGithub,
    mdiAccountKey,
    mdiAccountEye,
    mdiAccountGroup,
    mdiPalette,
    mdiBat
} from '@mdi/js'

export default [{
        route: 'dashboard',
        icon: mdiMonitor,
        label: 'Dashboard'
    },
    {
        route: 'permission.index',
        icon: mdiAccountKey,
        label: 'Permissions'
    },
    {
        route: 'role.index',
        icon: mdiAccountEye,
        label: 'Roles'
    },
    {
        route: 'user.index',
        icon: mdiAccountGroup,
        label: 'Users'
    },
    {
        route: 'title.index',
        icon: mdiBat,
        label: 'Titles'
    }
]