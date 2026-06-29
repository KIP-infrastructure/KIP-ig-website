# Function test - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Function test**

## CodeSystem: Function test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FunctionTest | *Version*:2.23.1 |
| Active as of 2022-07-19 | *Computable Name*:FunctionTest |

 
Function test 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FunktionTestADLDANDEM](ValueSet-FunktionTestADLDANDEM.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FunctionTest",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionTest",
  "version" : "2.23.1",
  "name" : "FunctionTest",
  "title" : "Function test",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Function test",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
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
    "code" : "faq_iadl",
    "display" : "FAQ (IADL)",
    "definition" : "FAQ (IADL)"
  },
  {
    "code" : "dad",
    "display" : "DAD",
    "definition" : "DAD"
  },
  {
    "code" : "adcs_adl",
    "display" : "ADCS-ADL",
    "definition" : "ADCS-ADL"
  }]
}

```
