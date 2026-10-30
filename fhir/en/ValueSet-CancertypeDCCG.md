# Cancertype DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cancertype DCCG**

## ValueSet: Cancertype DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CancertypeDCCG | *Version*:2.27.1 |
| Active as of 2022-09-06 | *Computable Name*:CancertypeDCCG |

 
Cancertype DCCG 

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
  "id" : "CancertypeDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CancertypeDCCG",
  "version" : "2.27.1",
  "name" : "CancertypeDCCG",
  "title" : "Cancertype DCCG",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Cancertype DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DC18",
        "display" : "Kolon"
      },
      {
        "code" : "DC20",
        "display" : "Rektum"
      }]
    }]
  }
}

```
