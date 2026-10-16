# SKS: Anatomisk lokation for ventrikel/esophagus - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Anatomisk lokation for ventrikel/esophagus**

## ValueSet: SKS: Anatomisk lokation for ventrikel/esophagus 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSVentrikelEsophagus | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:SKSVentrikelEsophagus |

 
SKS koderne for den anatomiske lokation for ventrikel/esophagus 

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
  "id" : "SKSVentrikelEsophagus",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSVentrikelEsophagus",
  "version" : "2.27.0",
  "name" : "SKSVentrikelEsophagus",
  "title" : "SKS: Anatomisk lokation for ventrikel/esophagus",
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
  "description" : "SKS koderne for den anatomiske lokation for ventrikel/esophagus",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000662",
        "display" : "Esophagus"
      },
      {
        "code" : "T000670",
        "display" : "Ventrikel"
      }]
    }]
  }
}

```
