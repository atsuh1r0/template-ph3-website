import { Link, Head } from '@inertiajs/react';

export default function Index({ auth, laravelVersion, phpVersion }) {
    const logo = '/img/logo.svg';
    return (
        <>
            <Head title="POSSE | プログラミング学習コミュニティ" />
            <div>
                <img src={logo} />
                <a href=" ./home ">aaaaa</a>
            </div>
        </>
    );
}
