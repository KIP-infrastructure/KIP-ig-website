# Trombolysepræparater - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trombolysepræparater**

## ValueSet: Trombolysepræparater 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Trombolysepraeparater | *Version*:2.27.2 |
| Active as of 2024-04-29 | *Computable Name*:Trombolysepraeparater |

 
Danstroke Trombolysepræparater 

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
  "id" : "Trombolysepraeparater",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Trombolysepraeparater",
  "version" : "2.27.2",
  "name" : "Trombolysepraeparater",
  "title" : "Trombolysepræparater",
  "status" : "active",
  "date" : "2024-04-29T00:00:00+02:00",
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
  "description" : "Danstroke Trombolysepræparater",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
      "concept" : [{
        "code" : "alteplase",
        "display" : "Actilyse (alteplase)"
      },
      {
        "code" : "tenecteplase",
        "display" : "Metalyse (tenecteplase)"
      }]
    }]
  }
}

```
