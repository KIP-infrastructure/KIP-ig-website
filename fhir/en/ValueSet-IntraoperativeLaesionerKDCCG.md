# Intraoperative læsioner - Kvinder (DCCG) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intraoperative læsioner - Kvinder (DCCG)**

## ValueSet: Intraoperative læsioner - Kvinder (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IntraoperativeLaesionerKDCCG | *Version*:2.27.1 |
| Active as of 2022-11-10 | *Computable Name*:IntraoperativeLaesionerKDCCG |

 
Intraoperative læsioner - Kvinder (DCCG) 

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
  "id" : "IntraoperativeLaesionerKDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IntraoperativeLaesionerKDCCG",
  "version" : "2.27.1",
  "name" : "IntraoperativeLaesionerKDCCG",
  "title" : "Intraoperative læsioner - Kvinder (DCCG)",
  "status" : "active",
  "date" : "2022-11-10T00:00:00+02:00",
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
  "description" : "Intraoperative læsioner - Kvinder (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000703",
        "display" : "Duodenum T000703"
      },
      {
        "code" : "T000627",
        "display" : "Galdeblære T000627"
      },
      {
        "code" : "T000725",
        "display" : "Kolon T000725"
      },
      {
        "code" : "T000607",
        "display" : "Lever T000607"
      },
      {
        "code" : "T000132",
        "display" : "Milt T000132"
      },
      {
        "code" : "T000638",
        "display" : "Pancreas T000638"
      },
      {
        "code" : "T000695",
        "display" : "Tyndtarm eksklusive duodenum T000695"
      },
      {
        "code" : "T000803",
        "display" : "Ureter T000803"
      },
      {
        "code" : "T000824",
        "display" : "Urethra T000824"
      },
      {
        "code" : "T000812",
        "display" : "Urinblære T000812"
      },
      {
        "code" : "T000892",
        "display" : "Vagina T000892"
      },
      {
        "code" : "T000670",
        "display" : "Ventrikel T000670"
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
