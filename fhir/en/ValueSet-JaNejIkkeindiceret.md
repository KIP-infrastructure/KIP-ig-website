# Ja / Nej / Ikke indiceret - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Ikke indiceret**

## ValueSet: Ja / Nej / Ikke indiceret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkeindiceret | *Version*:2.27.0 |
| Active as of 2022-09-01 | *Computable Name*:JaNejIkkeindiceret |

 
Muligheden for ja, nej og ikke indiceret 

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
  "id" : "JaNejIkkeindiceret",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkeindiceret",
  "version" : "2.27.0",
  "name" : "JaNejIkkeindiceret",
  "title" : "Ja / Nej / Ikke indiceret",
  "status" : "active",
  "date" : "2022-09-01T00:00:00+02:00",
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
  "description" : "Muligheden for ja, nej og ikke indiceret",
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
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_indicated",
        "display" : "Ikke indiceret"
      }]
    }]
  }
}

```
