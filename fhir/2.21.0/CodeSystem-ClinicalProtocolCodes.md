# Clinical protocol; name - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clinical protocol; name**

## CodeSystem: Clinical protocol; name 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolCodes | *Version*:2.21.0 |
| Active as of 2022-07-12 | *Computable Name*:ClinicalProtocolCodesCS |

 
Clinical protocol; name 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalProtocolCodes](ValueSet-ClinicalProtocolCodes.md)
* [ClinicalProtocolCodes1](ValueSet-ClinicalProtocolCodes1.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ClinicalProtocolCodes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolCodes",
  "version" : "2.21.0",
  "name" : "ClinicalProtocolCodesCS",
  "title" : "Clinical protocol; name",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Clinical protocol; name",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
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
    "code" : "mrc_15",
    "display" : "MRC-15",
    "definition" : "MRC-15 protocol"
  },
  {
    "code" : "mrc_16",
    "display" : "MRC-16",
    "definition" : "MRC-16 protocol"
  },
  {
    "code" : "mrc_17",
    "display" : "MRC-17",
    "definition" : "MRC-17 protocol"
  },
  {
    "code" : "mrc_18",
    "display" : "MRC-18",
    "definition" : "MRC-18 protocol"
  },
  {
    "code" : "mrc_19",
    "display" : "MRC-19",
    "definition" : "MRC-19 protocol"
  },
  {
    "code" : "mrc_li",
    "display" : "MRC-LI",
    "definition" : "MRC-LI protocol"
  }]
}

```
