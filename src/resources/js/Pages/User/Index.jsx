import { Link, Head } from '@inertiajs/react';
import { unstable_renderSubtreeIntoContainer } from 'react-dom';

export default function Index({ users }) {
  return (
    <>
            <Head title="User" />
            {users.map((user) => (
              <li key={user.id}>
                {user.name} ({user.email})
              </li>
            ))}
        </>
    );
}
