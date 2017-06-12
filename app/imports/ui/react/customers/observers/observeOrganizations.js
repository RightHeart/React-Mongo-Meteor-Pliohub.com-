import { Organizations } from '/imports/share/collections/organizations';
import {
  addOrganization,
  updateOrganization,
  removeOrganization,
} from '/imports/client/store/actions/collectionsActions';
import { getState } from '/imports/client/store';
import { expandCollapsedCustomer } from '../helpers';

export default (dispatch) => {
  const query = { isAdminOrg: { $ne: true } };

  const handle = Organizations.find(query).observeChanges({
    added(_id, fields) {
      if (handle) {
        dispatch(addOrganization({ _id, ...fields }));
      }
    },

    changed(_id, fields) {
      dispatch(updateOrganization({ _id, ...fields }));

      if (fields.customerType && getState('global.urlItemId') === _id) {
        expandCollapsedCustomer(_id);
      }
    },

    removed(_id) {
      dispatch(removeOrganization(_id));
    },
  });

  return handle;
};
