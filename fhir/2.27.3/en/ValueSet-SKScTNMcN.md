# SKS: cTNM klassifikation, cN - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: cTNM klassifikation, cN**

## ValueSet: SKS: cTNM klassifikation, cN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcN | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:SKScTNMcN |

 
SKS koderne relevante cN tillægskoder 

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
  "id" : "SKScTNMcN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcN",
  "version" : "2.27.3",
  "name" : "SKScTNMcN",
  "title" : "SKS: cTNM klassifikation, cN",
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
  "description" : "SKS koderne relevante cN tillægskoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "AZCD30",
        "display" : "cN0: Ingen regionale lymfeknudemetastaser"
      },
      {
        "code" : "AZCD31",
        "display" : "cN1: Regional lymfeknudemetastase"
      },
      {
        "code" : "AZCD32",
        "display" : "cN2: Regional lymfeknudemetastase"
      },
      {
        "code" : "AZCD33",
        "display" : "cN3: Regional lymfeknudemetastase"
      },
      {
        "code" : "AZCD39",
        "display" : "cNx: Opl om regional lymfeknudestatus foreligger ikke i afd"
      }]
    }]
  }
}

```
