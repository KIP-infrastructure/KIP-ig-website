# Findings with digital subtraction angiography (DSA); location of clot - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Findings with digital subtraction angiography (DSA); location of clot**

## CodeSystem: Findings with digital subtraction angiography (DSA); location of clot 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DSAFindingsLocation | *Version*:2.21.0 |
| Active as of 2022-06-28 | *Computable Name*:DSAFindingsLocation |

 
Findings with digital subtraction angiography (DSA); location of clot 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DSAFundLokation](ValueSet-DSAFundLokation.md)
* [DSAFundLokation2026](ValueSet-DSAFundLokation2026.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DSAFindingsLocation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DSAFindingsLocation",
  "version" : "2.21.0",
  "name" : "DSAFindingsLocation",
  "title" : "Findings with digital subtraction angiography (DSA); location of clot",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Findings with digital subtraction angiography (DSA); location of clot",
  "content" : "complete",
  "count" : 14,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "cca",
    "display" : "CCA",
    "definition" : "CCA"
  },
  {
    "code" : "ica",
    "display" : "ICA",
    "definition" : "ICA"
  },
  {
    "code" : "ica-t",
    "display" : "ICA-T",
    "definition" : "ICA-T"
  },
  {
    "code" : "mca1",
    "display" : "MCA 1",
    "definition" : "MCA 1"
  },
  {
    "code" : "mca2",
    "display" : "MCA 2",
    "definition" : "MCA 2"
  },
  {
    "code" : "aca",
    "display" : "ACA",
    "definition" : "ACA"
  },
  {
    "code" : "va",
    "display" : "VA",
    "definition" : "VA"
  },
  {
    "code" : "ba",
    "display" : "BA",
    "definition" : "BA"
  },
  {
    "code" : "pca/other",
    "display" : "PCA/Other",
    "definition" : "PCA/Other"
  },
  {
    "code" : "cervical_dissection",
    "display" : "Cervical dissection",
    "definition" : "Cervical dissection",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "Extracranial",
    "display" : "Extracranial (CCA, ICA)",
    "definition" : "Extracranial (CCA, ICA)",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "Large_vessel_occlusion",
    "display" : "Large vessel occlusion, LVO (ICA, M1, Proksimal M2)",
    "definition" : "Large vessel occlusion, LVO (ICA, M1, Proksimal M2)",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "Medium_vessel_occlusion",
    "display" : "Medium vessel occlusion, MEVO (Distal M2, ACA, PCA)",
    "definition" : "Medium vessel occlusion, MEVO (Distal M2, ACA, PCA)",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "Posterior_circulation",
    "display" : "Posterior circulation",
    "definition" : "Posterior circulation",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  }]
}

```
