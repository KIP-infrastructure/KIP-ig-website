# Mors Diagnosegrupper (DNSL) - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosegrupper (DNSL)**

## CodeSystem: Mors Diagnosegrupper (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosegrupper | *Version*:2.23.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnosegrupperCS |

 
Mors Diagnosegrupper (DNSL) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MorsDiagnosegrupper](ValueSet-MorsDiagnosegrupper.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MorsDiagnosegrupper",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosegrupper",
  "version" : "2.23.1",
  "name" : "MorsDiagnosegrupperCS",
  "title" : "Mors Diagnosegrupper (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Mors Diagnosegrupper (DNSL)",
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
    "code" : "infektion",
    "display" : "Infektioner"
  },
  {
    "code" : "kardinal",
    "display" : "Kardiale årsager"
  },
  {
    "code" : "Lever",
    "display" : "Leverlidelser"
  },
  {
    "code" : "social",
    "display" : "Socialt"
  },
  {
    "code" : "ulykker",
    "display" : "Ulykke"
  },
  {
    "code" : "vaskulaer",
    "display" : "Vaskulære årsager"
  }]
}

```
