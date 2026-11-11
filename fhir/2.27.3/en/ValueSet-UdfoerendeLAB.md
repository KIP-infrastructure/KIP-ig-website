# UdførendendeLAB - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UdførendendeLAB**

## ValueSet: UdførendendeLAB 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UdfoerendeLAB | *Version*:2.27.3 |
| Active as of 2024-08-08 | *Computable Name*:UdfoerendeLAB |

 
UdførendeLAB 

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
  "id" : "UdfoerendeLAB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UdfoerendeLAB",
  "version" : "2.27.3",
  "name" : "UdfoerendeLAB",
  "title" : "UdførendendeLAB",
  "status" : "active",
  "date" : "2024-08-08T00:00:00+02:00",
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
  "description" : "UdførendeLAB",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "682641000016004",
        "display" : "Afdeling for blodprøver og biokemi, Aarhus Universitetshospital"
      },
      {
        "code" : "256631000016003",
        "display" : "Afdeling for Klinisk Biokemi – Blegdamsvej"
      }]
    }]
  }
}

```
