# Reasons for procedure - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reasons for procedure**

## CodeSystem: Reasons for procedure 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons | *Version*:2.21.0 |
| Active as of 2022-06-03 | *Computable Name*:ProcedureReasons |

 
Reasons for procedure 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AarsagTilProcedureDCCG](ValueSet-AarsagTilProcedureDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureReasons",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons",
  "version" : "2.21.0",
  "name" : "ProcedureReasons",
  "title" : "Reasons for procedure",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Reasons for procedure",
  "caseSensitive" : false,
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
    "code" : "patients_wish",
    "display" : "Patient's wish",
    "definition" : "Patient's wish / Patientønske"
  },
  {
    "code" : "non_resectable",
    "display" : "Non resectable",
    "definition" : "Non resectable / Ikke resektabel"
  },
  {
    "code" : "non_operable",
    "display" : "Non operable",
    "definition" : "Patienten er blevet non-operabel"
  },
  {
    "code" : "disseminated_disease",
    "display" : "Disseminated disease",
    "definition" : "Disseminated disease / Dissemineret sygdom"
  }]
}

```
