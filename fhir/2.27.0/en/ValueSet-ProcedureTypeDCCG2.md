# Proceduretyper til DCCG 2 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Proceduretyper til DCCG 2**

## ValueSet: Proceduretyper til DCCG 2 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG2 | *Version*:2.27.0 |
| Active as of 2022-10-11 | *Computable Name*:ProcedureTypeDCCG2 |

 
Proceduretyper til DCCG 2 

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
  "id" : "ProcedureTypeDCCG2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureTypeDCCG2",
  "version" : "2.27.0",
  "name" : "ProcedureTypeDCCG2",
  "title" : "Proceduretyper til DCCG 2",
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
  "description" : "Proceduretyper til DCCG 2",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen konvertering"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "laparotomy",
        "display" : "Laparotomi"
      },
      {
        "code" : "multiple_ports",
        "display" : "Flerport laparoskopi"
      },
      {
        "code" : "transanal_dissection",
        "display" : "Transanal dissektion"
      }]
    }]
  }
}

```
