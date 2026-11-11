# Resultat - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resultat**

## ValueSet: Resultat 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Result | *Version*:2.27.3 |
| Active as of 2024-03-06 | *Computable Name*:Result |

 
Resultat Negativ/Positiv 

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
  "id" : "Result",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Result",
  "version" : "2.27.3",
  "name" : "Result",
  "title" : "Resultat",
  "status" : "active",
  "date" : "2024-03-06T00:00:00+02:00",
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
  "description" : "Resultat Negativ/Positiv",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "postive",
        "display" : "Positiv"
      },
      {
        "code" : "negative",
        "display" : "Negativ"
      }]
    }]
  }
}

```
