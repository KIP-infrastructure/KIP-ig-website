# Ja / Nej / Ikke spurgt - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Ikke spurgt**

## ValueSet: Ja / Nej / Ikke spurgt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkeSpurgt | *Version*:2.27.1 |
| Active as of 2022-06-03 | *Computable Name*:JaNejIkkeSpurgt |

 
Muligheden for ja, nej og ikke spurgt 

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
  "id" : "JaNejIkkeSpurgt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkeSpurgt",
  "version" : "2.27.1",
  "name" : "JaNejIkkeSpurgt",
  "title" : "Ja / Nej / Ikke spurgt",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Muligheden for ja, nej og ikke spurgt",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "Y",
        "display" : "Ja"
      },
      {
        "code" : "N",
        "display" : "Nej"
      },
      {
        "code" : "NASK",
        "display" : "Ikke spurgt"
      }]
    }]
  }
}

```
