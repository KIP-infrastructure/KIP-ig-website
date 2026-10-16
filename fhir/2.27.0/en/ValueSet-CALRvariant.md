# CALR variant - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CALR variant**

## ValueSet: CALR variant 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CALRvariant | *Version*:2.27.0 |
| Active as of 2022-07-18 | *Computable Name*:CALRvariant |

 
CALR variant 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "CALRvariant",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CALRvariant",
  "version" : "2.27.0",
  "name" : "CALRvariant",
  "title" : "CALR variant",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "CALR variant",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CALRGeneType",
      "concept" : [{
        "code" : "type_1",
        "display" : "Type 1"
      },
      {
        "code" : "type_2",
        "display" : "Type 2"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden CALR mutation"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
