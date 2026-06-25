# Medicine - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicine**

## CodeSystem: Medicine 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Medicine | *Version*:2.23.0 |
| Active as of 2022-10-06 | *Computable Name*:Medicine |

 
Medicine 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinPraeparatDSR](ValueSet-MedicinPraeparatDSR.md)
* [Trombolysepraeparater](ValueSet-Trombolysepraeparater.md)
* [VarighedPostOPTrombDKR](ValueSet-VarighedPostOPTrombDKR.md)
* [VarighedPostOPTrombDKR1](ValueSet-VarighedPostOPTrombDKR1.md)
* [VarighedPostOPTrombDKR2](ValueSet-VarighedPostOPTrombDKR2.md)
* [VarighedPostOPTrombDKR3](ValueSet-VarighedPostOPTrombDKR3.md)
* [VarighedPostOPTrombDKRNOAK](ValueSet-VarighedPostOPTrombDKRNOAK.md)
* [VarighedPostOPTrombDKRVitKanta](ValueSet-VarighedPostOPTrombDKRVitKanta.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Medicine",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
  "version" : "2.23.0",
  "name" : "Medicine",
  "title" : "Medicine",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Medicine",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
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
    "code" : "beh-vitamin_k",
    "display" : "Vitamin-K-antagonist",
    "definition" : "Behandling med vitamin-K-antagonist"
  },
  {
    "code" : "noak_a",
    "display" : "NOAK halv dosis",
    "definition" : "NOAK halv dosis"
  },
  {
    "code" : "noak_b",
    "display" : "NOAK fuld dosis",
    "definition" : "NOAK fuld dosis"
  },
  {
    "code" : "noak_c",
    "display" : "NOAK fuld dosis postop",
    "definition" : "NOAK fuld dosis postop"
  },
  {
    "code" : "antibiotics",
    "display" : "Antibiotics",
    "definition" : "Antibiotics / Antibiotika"
  },
  {
    "code" : "penicillin",
    "display" : "Penicillin",
    "definition" : "Penicillin"
  },
  {
    "code" : "penicillinase_stabile",
    "display" : "Penicillinasestabilt penicilin",
    "definition" : "Penicillinasestabilt penicilin"
  },
  {
    "code" : "cephalosporin",
    "display" : "Cefalosporin",
    "definition" : "Cefalosporin"
  },
  {
    "code" : "alteplase",
    "display" : "Actilyse (alteplase)",
    "definition" : "Actilyse (alteplase)"
  },
  {
    "code" : "tenecteplase",
    "display" : "Metalyse (tenecteplase)",
    "definition" : "Metalyse (tenecteplase)"
  }]
}

```
