# Incisionsvalg - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Incisionsvalg**

## ValueSet: Incisionsvalg 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Incisionsvalg | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:Incisionsvalg |

 
Incisionsvalg for kræft databaser (DEGC) 

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
  "id" : "Incisionsvalg",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Incisionsvalg",
  "version" : "2.27.3",
  "name" : "Incisionsvalg",
  "title" : "Incisionsvalg",
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
  "description" : "Incisionsvalg for kræft databaser (DEGC)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
      "concept" : [{
        "code" : "abdomnial",
        "display" : "Abdominal adgang"
      },
      {
        "code" : "abdominal_thoracic",
        "display" : "Separat abdominal og torakal adgang"
      },
      {
        "code" : "toracoabdominal",
        "display" : "Torakabdominal adgang med deling af diafragma"
      },
      {
        "code" : "transhiatal_siewert",
        "display" : "Transhiatal adgang (a.m. Siewert)"
      },
      {
        "code" : "transhiatal_neck",
        "display" : "Transhiatal adgang og anastomose på hals"
      },
      {
        "code" : "abdominal_thoracoskopic",
        "display" : "Separat abdominal & torakoskopisk"
      },
      {
        "code" : "laparoscopic_thoracoskopic",
        "display" : "Laparoskopisk & torakoskopisk"
      },
      {
        "code" : "laparoscopic_thoracotomy",
        "display" : "Laparoskopisk & separat torakotomi"
      },
      {
        "code" : "laparoscopic",
        "display" : "Laparoskopisk"
      },
      {
        "code" : "endoscopic",
        "display" : "Endoskopisk"
      },
      {
        "code" : "cervical",
        "display" : "Cervikal adgang (frit tyndtarmstransplantat)"
      }]
    }]
  }
}

```
