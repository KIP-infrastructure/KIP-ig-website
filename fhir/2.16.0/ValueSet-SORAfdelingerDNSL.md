# SOR: Afdelinger (DNSL) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Afdelinger (DNSL)**

## ValueSet: SOR: Afdelinger (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerDNSL | *Version*:2.16.0 |
| Active as of 2024-01-31 | *Computable Name*:SORAfdelingerDNSL |

 
SOR: Afdelinger Nyresvigt (DNSL) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "SORAfdelingerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerDNSL",
  "version" : "2.16.0",
  "name" : "SORAfdelingerDNSL",
  "title" : "SOR: Afdelinger (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-31T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "SOR: Afdelinger Nyresvigt (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "989231000016003",
            "display" : "Hillerød, HI Endokrinologisk og Nefrologisk Overafd. (989231000016003)"
          },
          {
            "code" : "264781000016005",
            "display" : "Herlev, Nefrologisk overafd. B (264781000016005)"
          },
          {
            "code" : "252441000016006",
            "display" : "Rigshospitalet, Nefrologisk Klinik, P (252441000016006)"
          },
          {
            "code" : "265611000016005",
            "display" : "Rønne, Medicinsk overafd. (265611000016005)"
          },
          {
            "code" : "227011000016003",
            "display" : "Holbæk, HOL Medicin – Overafdeling (227011000016003)"
          },
          {
            "code" : "223181000016000",
            "display" : "Roskilde og Nykøbing Falster Sygehus, ROS Medicin – Overafdeling (223181000016000)"
          },
          {
            "code" : "239831000016009",
            "display" : "OUH Nyremedicinsk Afdeling Y (239831000016009)"
          },
          {
            "code" : "246501000016005",
            "display" : "Esbjerg, SVS Medicinsk Område (246501000016005)"
          },
          {
            "code" : "247441000016006",
            "display" : "Fredericia, SLB Medicinske Sygdomme (Kolding) (247441000016006)"
          },
          {
            "code" : "504361000016006",
            "display" : "Sønderborg, SHS Diabetes, Hormon- og Nyresygdomme (504361000016006)"
          },
          {
            "code" : "453111000016005",
            "display" : "Aarhus/Skejby, Nyresygdomme Overafdeling (453111000016005)"
          },
          {
            "code" : "900231000016007",
            "display" : "Holstebro, Gødstrup, Medicinsk Afdeling – RHG (900231000016007)"
          },
          {
            "code" : "507561000016008",
            "display" : "Viborg, Klinik for Nyresygdomme Viborg (507561000016008)"
          },
          {
            "code" : "275931000016002",
            "display" : "Aalborg, Nyremedicinsk område (275931000016002)"
          }
        ]
      }
    ]
  }
}

```
