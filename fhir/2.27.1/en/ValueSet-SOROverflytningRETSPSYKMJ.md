# SOR: Overflytning Midtjylland (RETSPSYK) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning Midtjylland (RETSPSYK)**

## ValueSet: SOR: Overflytning Midtjylland (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKMJ | *Version*:2.27.1 |
| Active as of 2024-03-13 | *Computable Name*:SOROverflytningRETSPSYKMJ |

 
SOR: Overflytning Midtjylland (RETSPSYK) 

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
  "id" : "SOROverflytningRETSPSYKMJ",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKMJ",
  "version" : "2.27.1",
  "name" : "SOROverflytningRETSPSYKMJ",
  "title" : "SOR: Overflytning Midtjylland (RETSPSYK)",
  "status" : "active",
  "date" : "2024-03-13T00:00:00+02:00",
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
  "description" : "SOR: Overflytning Midtjylland (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "695151000016003",
        "display" : "Afdeling for Psykoser - AUH"
      },
      {
        "code" : "694891000016001",
        "display" : "ADA Klinik for Angst og OCD - AUH"
      },
      {
        "code" : "1200011000016005",
        "display" : "ADA Klinik for Bipolar Sygdom - AUH"
      },
      {
        "code" : "1199951000016004",
        "display" : "ADA Klinik for Depression - AUH"
      },
      {
        "code" : "694841000016009",
        "display" : "ADA Klinik for Personlighedsforstyrrelser - AUH"
      },
      {
        "code" : "694901000016000",
        "display" : "ADA Klinik for PTSD og Transkulturel Psykiatri - AUH"
      },
      {
        "code" : "695161000016000",
        "display" : "AFP Psykiatri Sengeafsnit for Psykoser - AUH"
      },
      {
        "code" : "695251000016007",
        "display" : "AFP Psykiatrisk Klinik 1 - AUH"
      },
      {
        "code" : "695281000016003",
        "display" : "AFP Psykiatrisk Klinik 2 - AUH"
      },
      {
        "code" : "694441000016007",
        "display" : "BUA Psykiatrisk Klinik for Unge"
      },
      {
        "code" : "694461000016008",
        "display" : "BUA Børne- og Ungdomspsykiatri - Sengeafsnit"
      },
      {
        "code" : "694681000016004",
        "display" : "BUA Klinik for Mentalobservation - AUH"
      },
      {
        "code" : "694271000016004",
        "display" : "RET Retspsykiatri - Sengeafsnit 1 - AUH"
      },
      {
        "code" : "694281000016002",
        "display" : "RET Retspsykiatri - Sengeafsnit 2 - AUH"
      },
      {
        "code" : "694291000016000",
        "display" : "RET Retspsykiatri - Sengeafsnit 3 - AUH"
      },
      {
        "code" : "694301000016001",
        "display" : "RET Retspsykiatri - Sengeafsnit 4 - AUH"
      },
      {
        "code" : "694331000016005",
        "display" : "RET Retspsykiatrisk Opsøgende Team - AUH "
      },
      {
        "code" : "694231000016001",
        "display" : "RET Psykiatri Sengeafsnit for Retspsykiatri - AUH"
      },
      {
        "code" : "694251000016006",
        "display" : "RET Retspsykiatrisk Klinik - AUH"
      },
      {
        "code" : "694221000016003",
        "display" : "Retspsykiatrisk Afdeling - AUH"
      },
      {
        "code" : "694351000016000",
        "display" : "Afdeling for Depression og Angst - AUH"
      },
      {
        "code" : "454451000016003",
        "display" : "PMI Klinik for psykoser - Midt"
      },
      {
        "code" : "454461000016000",
        "display" : "PMI Klinik for retspsykiatri - Midt"
      },
      {
        "code" : "391151000016008",
        "display" : "PMI Regionspsykiatrien Midt"
      },
      {
        "code" : "454401000016004",
        "display" : "PMI Sengeafsnit - Regionspsykiatri Midt"
      },
      {
        "code" : "603271000016004",
        "display" : "PMI R1 Sengeafsnit retspsykiatri - Viborg"
      },
      {
        "code" : "603281000016002",
        "display" : "PMI R2 Sengeafsnit retspsykiatri - Viborg"
      },
      {
        "code" : "463791000016008",
        "display" : "PMI Sengeafsnit retspsykiatri - Viborg"
      },
      {
        "code" : "687931000016002",
        "display" : "PMI Særlige Pladser - Viborg"
      },
      {
        "code" : "884331000016001",
        "display" : "PMI Klinik for retspsykiatri - Viborg-Skive"
      },
      {
        "code" : "884301000016005",
        "display" : "PMI ADHD og Rusmiddelteam - Silkeborg"
      },
      {
        "code" : "884201000016001",
        "display" : "PMI Team for depression og mani - Silkeborg"
      },
      {
        "code" : "884181000016000",
        "display" : "PMI Team for OCD og Angstlidelser - Silkeborg"
      },
      {
        "code" : "884321000016003",
        "display" : "PMI Team for psykoser - Silkeborg"
      },
      {
        "code" : "479201000016002",
        "display" : "Klinik 1 for Psykiatriske Lidelser - Regionspsykiatrien Horsens "
      },
      {
        "code" : "934471000016008",
        "display" : "PHO Team for Retspsykiatri - Horsens"
      },
      {
        "code" : "391161000016006",
        "display" : "PHO Regionspsykiatrien Horsens"
      },
      {
        "code" : "479221000016009",
        "display" : "PHO O1 Sengeafsnit Regionspsykiatri - Horsens"
      },
      {
        "code" : "391171000016001",
        "display" : "Regionspsykiatrien Randers"
      },
      {
        "code" : "486741000016006",
        "display" : "PRA Psykiatrisk Klinik 2 - Randers"
      },
      {
        "code" : "387101000016000",
        "display" : "PVE Ambulant psykose enhed - vest"
      },
      {
        "code" : "1223721000016002",
        "display" : "RPG Enhed for Retspsykiatri – Gødstrup"
      },
      {
        "code" : "986621000016007",
        "display" : "Regionspsykiatrien Gødstrup"
      },
      {
        "code" : "986631000016009",
        "display" : "RPG Sengeafdeling Regionpsykiatrien - Gødstrup"
      },
      {
        "code" : "1223761000016008",
        "display" : "RPG Team for Retspsykiatri - Gødstrup"
      }]
    }]
  }
}

```
