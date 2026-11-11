# Anatomisk lokation for anurisme [SAH] - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anatomisk lokation for anurisme [SAH]**

## ValueSet: Anatomisk lokation for anurisme [SAH] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokationAneurismeSAH | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:LokationAneurismeSAH |

 
Anatomisk lokation for anurisme [SAH] 

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
  "id" : "LokationAneurismeSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokationAneurismeSAH",
  "version" : "2.27.3",
  "name" : "LokationAneurismeSAH",
  "title" : "Anatomisk lokation for anurisme [SAH]",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Anatomisk lokation for anurisme [SAH]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000526",
        "display" : "A. communicans anterior"
      },
      {
        "code" : "T000527",
        "display" : "A. cerebri anterior (inkl. a. pericallosa)"
      },
      {
        "code" : "T000522",
        "display" : "A. carotis interna (inkl. paraopthalmisk)"
      },
      {
        "code" : "T000528",
        "display" : "A. cerebri media"
      },
      {
        "code" : "T000523",
        "display" : "A. communicans posterior"
      },
      {
        "code" : "T000530",
        "display" : "A. basilaris (inkl. Basilaris toppen)"
      },
      {
        "code" : "T000529",
        "display" : "A. vertebralis"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
      "concept" : [{
        "code" : "acarotistop",
        "display" : "Carotistop aneurisme"
      },
      {
        "code" : "acerebellisuperior",
        "display" : "A. cerebelli superior"
      },
      {
        "code" : "acerebelliantinf",
        "display" : "A. cerebelli anterior inferior"
      },
      {
        "code" : "acerebelliposinf",
        "display" : "A. cerebelli posterior inferior"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
