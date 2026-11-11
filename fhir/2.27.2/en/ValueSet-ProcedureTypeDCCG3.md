# Proceduretyper til DCCG 3 - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Proceduretyper til DCCG 3**

## ValueSet: Proceduretyper til DCCG 3 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG3 | *Version*:2.27.2 |
| Active as of 2022-10-11 | *Computable Name*:ProcedureTypeDCCG3 |

 
Proceduretyper til DCCG 3 

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
  "id" : "ProcedureTypeDCCG3",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG3",
  "version" : "2.27.2",
  "name" : "ProcedureTypeDCCG3",
  "title" : "Proceduretyper til DCCG 3",
  "status" : "active",
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Proceduretyper til DCCG 3",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "tme",
        "display" : "TME"
      },
      {
        "code" : "pme",
        "display" : "PME"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "NA",
        "display" : "Ikke relevant"
      }]
    }]
  }
}

```
