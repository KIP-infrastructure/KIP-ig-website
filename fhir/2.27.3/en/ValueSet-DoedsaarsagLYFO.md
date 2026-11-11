# Dødsårsag (LYFO) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsag (LYFO)**

## ValueSet: Dødsårsag (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagLYFO | *Version*:2.27.3 |
| Active as of 2022-07-18 | *Computable Name*:DoedsaarsagLYFO |

 
Dødsårsag (LYFO) 

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
  "id" : "DoedsaarsagLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagLYFO",
  "version" : "2.27.3",
  "name" : "DoedsaarsagLYFO",
  "title" : "Dødsårsag (LYFO)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Dødsårsag (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath",
      "concept" : [{
        "code" : "therapy_related_progression",
        "display" : "Terapirelateret dødsfald MED sygdomsprogression"
      },
      {
        "code" : "therapy_related",
        "display" : "Terapirelateret dødsfald uden sygdomsprogression"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressiv sygdom"
      },
      {
        "code" : "other_complete_remissiong",
        "display" : "Anden årsag, død i komplet remission (CR)"
      },
      {
        "code" : "other_not_complete_remissiong",
        "display" : "Anden årsag, IKKE i komplet remision (CR) ved død"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UKN",
        "display" : "Ukendt"
      }]
    }]
  }
}

```
