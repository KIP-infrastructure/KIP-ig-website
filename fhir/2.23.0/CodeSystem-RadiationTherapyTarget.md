# Target of the radiation therapy - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Target of the radiation therapy**

## CodeSystem: Target of the radiation therapy 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyTarget | *Version*:2.23.0 |
| Active as of 2022-06-17 | *Computable Name*:RadiationTherapyTarget |

 
Target of the radiation therapy 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StraalebehandlingMaal](ValueSet-StraalebehandlingMaal.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiationTherapyTarget",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyTarget",
  "version" : "2.23.0",
  "name" : "RadiationTherapyTarget",
  "title" : "Target of the radiation therapy",
  "status" : "active",
  "date" : "2022-06-17T00:00:00+02:00",
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
  "description" : "Target of the radiation therapy",
  "content" : "complete",
  "count" : 4,
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
    "code" : "primarytumor",
    "display" : "Primary tumor",
    "definition" : "Primary tumor"
  },
  {
    "code" : "bonemetastases",
    "display" : "Bone metastases",
    "definition" : "Bone metastases"
  },
  {
    "code" : "cns",
    "display" : "CNS",
    "definition" : "Central nervous system (CNS)"
  },
  {
    "code" : "other",
    "display" : "Other/non-specified",
    "definition" : "Other target/non-specified target"
  }]
}

```
