import { Meteor } from 'meteor/meteor';

import { Organizations } from '/imports/share/collections/organizations';
import { ProblemTypes, DocumentTypes } from '/imports/share/constants';

const getPathPrefixByDocType = (docType) => ({
  [DocumentTypes.STANDARD]: 'standards',
  [DocumentTypes.RISK]: 'risks',
  [DocumentTypes.NON_CONFORMITY]: 'non-conformities',
})[docType];

export const getAbsoluteUrl = path => (
  Meteor.absoluteUrl(path, {
    rootUrl: Meteor.settings.mainApp.url,
  })
);

export const getDocPath = ({ serialNumber, documentId, prefix }) => (
  `${serialNumber}/${prefix}/${documentId}`
);

export const getDocUrl = ({ serialNumber, documentId, prefix }) => (
  getAbsoluteUrl(getDocPath({ serialNumber, documentId, prefix }))
);

export const getNCUrl = (serialNumber, documentId) => (
  getDocUrl({
    prefix: getPathPrefixByDocType(DocumentTypes.NON_CONFORMITY),
    serialNumber,
    documentId,
  })
);

export const getRiskUrl = (serialNumber, documentId) => (
  getDocUrl({
    prefix: getPathPrefixByDocType(DocumentTypes.RISK),
    serialNumber,
    documentId,
  })
);

export const getStandardUrl = (serialNumber, documentId) => (
  getDocUrl({
    prefix: getPathPrefixByDocType(DocumentTypes.STANDARD),
    serialNumber,
    documentId,
  })
);

export const getWorkItemUrl = (serialNumber, documentId) => {
  const path = `${serialNumber}/work-inbox?id=${documentId}`;
  return getAbsoluteUrl(path);
};

export const getProblemUrl = (problem, problemType, organization) => {
  const urlFn = {
    [ProblemTypes.NON_CONFORMITY]: getNCUrl,
    [ProblemTypes.RISK]: getRiskUrl,
  }[problemType];

  return urlFn && urlFn(organization.serialNumber, problem._id);
};

export const getDocUrlByOrganizationId = prefix => ({ _id, organizationId }) => {
  const { serialNumber } = { ...Organizations.findOne({ _id: organizationId }) };
  const url = getDocUrl({ serialNumber, prefix, documentId: _id });

  return url;
};

export const getDocUnsubscribePath = path => (path ? `${path}/unsubscribe` : '');

export const getCollectionUrlByDocType = (docType, serialNumber) => {
  const prefix = getPathPrefixByDocType(docType);
  const url = getAbsoluteUrl(`${serialNumber}/${prefix}`);

  return url;
};

export const removeQueryParams = str => `${str}`.split('?')[0];
