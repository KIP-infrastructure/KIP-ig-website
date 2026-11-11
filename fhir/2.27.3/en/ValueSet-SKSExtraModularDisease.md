# Ekstramedullær sygdom - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ekstramedullær sygdom**

## ValueSet: Ekstramedullær sygdom 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSExtraModularDisease | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:SKSExtraModularDisease |

 
Ekstramedullær sygdom 

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
  "id" : "SKSExtraModularDisease",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSExtraModularDisease",
  "version" : "2.27.3",
  "name" : "SKSExtraModularDisease",
  "title" : "Ekstramedullær sygdom",
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
  "description" : "Ekstramedullær sygdom",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000010",
        "display" : "Hud"
      },
      {
        "code" : "T000569",
        "display" : "Oralt"
      },
      {
        "code" : "T001039",
        "display" : "CNS"
      },
      {
        "code" : "T000607",
        "display" : "Lever"
      },
      {
        "code" : "T000132",
        "display" : "Milt"
      },
      {
        "code" : "T000854",
        "display" : "Testes"
      },
      {
        "code" : "T000134",
        "display" : "Lymfeknude"
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
